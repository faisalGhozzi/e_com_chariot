<?php

namespace App\Controller\Mobile;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LivreurRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Livreur;
use App\Form\LivreurType;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints as Assert;
use Knp\Component\Pager\PaginatorInterface;
use App\Form\SearchFormType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use App\Entity\Livraison;
use App\Repository\AdresseRepository;
use App\Entity\Adresse;

class LivreurController extends AbstractController
{
    /**
     * @Route("/livreurs/json", name="LivreursJsonAction")
     * @throws ExceptionInterface
     */
    public function livreursJsonAction(LivreurRepository $livreurRepository): JsonResponse
    {
        $livreurs = $livreurRepository->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($livreurs);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/livreurs/json/new", name="LivreursJsonNewAction")
     */
    public function newLivreurJson(Request $request): JsonResponse
    {
        $livreur = new Livreur();

        $em = $this->getDoctrine()->getManager();

        $livreur->setNomlivreur($request->get('nom'));
        $livreur->setPrenom($request->get('prenom'));
        $livreur->setNomlivreur($request->get('tel'));
        $livreur->setPrenom($request->get('email'));

        $em->persist($livreur);
        $em->flush();

        return new JsonResponse($livreur);
    }

    /**
     * @Route("/livreurs/json/update", name="LivreursJsonUpdateAction")
     */
    public function updateLivreurJson(LivreurRepository $livreurRepository, Request $request): JsonResponse
    {

        $em = $this->getDoctrine()->getManager();

        $livreur = $livreurRepository->find($request->get('id'));
        $livreur->setNomlivreur($request->get('nom'));
        $livreur->setPrenom($request->get('prenom'));
        $livreur->setNomlivreur($request->get('tel'));
        $livreur->setPrenom($request->get('email'));
        $em->flush();

        return new JsonResponse($livreur);
    }

    /**
     * @Route("/livreurs/json/{id}", name="LivreursIdJson")
     * @throws ExceptionInterface
     */
    public function livreursIdJson(LivreurRepository $livreurRepository, $id): JsonResponse
    {
        $livreurs = $livreurRepository->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($livreurs);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/livreurs/json/delete/{id}", name="deleteLivreursJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteLivreursJsonAction(LivreurRepository $livreurRepository, $id): JsonResponse
    {
        $livreurs = $livreurRepository->find($id);
        $this->getDoctrine()->getManager()->remove($livreurs);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($livreurs);
        return new JsonResponse($formatted);
    }
}

