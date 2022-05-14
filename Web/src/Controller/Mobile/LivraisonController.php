<?php

namespace App\Controller\Mobile;

use App\Entity\Livraison;
use App\Entity\Livreur;
use App\Entity\Produit;
use App\Repository\AdresseRepository;
use App\Repository\LivreurRepository;
use App\Repository\ProduitRepository;
use Knp\Component\Pager\PaginatorInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LivraisonRepository;
use App\Form\LivraisonType;
use App\Repository\UserRepository;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class LivraisonController extends AbstractController
{
    /**
     * @Route("/livraisons/json", name="LivraisonsJsonAction")
     * @throws ExceptionInterface
     */
    public function livraisonsJsonAction(LivraisonRepository $livraisonRepository): JsonResponse
    {
        $livraisons = $livraisonRepository->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($livraisons);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/livraisons/nolivreur/json", name="LivraisonsSansLivreursJsonAction")
     * @throws ExceptionInterface
     */
    public function livraisonsSansLivreursJsonAction(LivraisonRepository $livraisonRepository): JsonResponse
    {
        $livraisons = $livraisonRepository->findByLivreur();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($livraisons);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/livraisons/json/new", name="LivraisonsJsonNewAction")
     */
    public function newLivraisonJson(UserRepository $userRepository, ProduitRepository $produitRepository, AdresseRepository $adresseRepository, Request $request): JsonResponse
    {
        $livraison = new Livraison();
        $user = $userRepository->find($request->get("user"));
        $adresse = $adresseRepository->find($request->get("adresse"));
        $produit = $produitRepository->find($request->get("produit"));

        $em = $this->getDoctrine()->getManager();
        
        $livraison->setType($request->get("type"));
        $livraison->setAdresse($adresse);
        $livraison->setIdProduit($produit);
        $livraison->setIduser($user);
        $livraison->setEtat(0);
        $em->persist($livraison);

        $em->flush();
        return new JsonResponse($livraison);
    }

    /**
     * @Route("/livraisons/json/update", name="LivraisonsJsonUpdateAction")
     */
    public function updateLivraisonJson(LivreurRepository $livreurRepository, LivraisonRepository $livraisonRepository, Request $request): JsonResponse
    {
        $livraison = $livraisonRepository->find($request->get("id"));
        
        $livreur = $livreurRepository->find($request->get("livreur"));


        $em = $this->getDoctrine()->getManager();
        $livraison->setEtat(1);
        $livraison->setIdLivreur($livreur);

        $em->persist($livraison);
        $em->flush();

        return new JsonResponse($livraison);
    }

    /**
     * @Route("/livraisons/json/{id}", name="LivraisonsIdJson")
     * @throws ExceptionInterface
     */
    public function livraisonsIdJson($id): JsonResponse
    {
        $livraisons = $this->getDoctrine()->getManager()
            ->getRepository(Livraison::class)->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($livraisons);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/livraisons/json/delete/{id}", name="deleteLivraisonsJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteLivraisonsJsonAction($id): JsonResponse
    {
        $livraisons = $this->getDoctrine()
            ->getRepository(Livraison::class)->find($id);
        $this->getDoctrine()->getManager()->remove($livraisons);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($livraisons);
        return new JsonResponse($formatted);
    }
}
