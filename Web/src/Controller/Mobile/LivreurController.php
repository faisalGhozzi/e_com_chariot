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
use Symfony\Component \Mailer\MailerInterface;
use Symfony\Component \Mime\Email;
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
    public function livreursJsonAction(): JsonResponse
    {
        $livreurs = $this->getDoctrine()->getManager()
            ->getRepository(Livreur::class)->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($livreurs);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/livreurs/json/{id}", name="LivreursIdJson")
     * @throws ExceptionInterface
     */
    public function livreursIdJson($id): JsonResponse
    {
        $livreurs = $this->getDoctrine()->getManager()
            ->getRepository(Livreur::class)->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($livreurs);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/livreurs/json/delete/{id}", name="deleteLivreursJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteLivreursJsonAction($id): JsonResponse
    {
        $livreurs = $this->getDoctrine()
            ->getRepository(Livreur::class)->find($id);
        $this->getDoctrine()->getManager()->remove($livreurs);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($livreurs);
        return new JsonResponse($formatted);
    }
}

