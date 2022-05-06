<?php

namespace App\Controller\Mobile;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;
use App\Entity\Produit;
use App\Form\ProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produits/json", name="ProduitsJsonAction")
     * @throws ExceptionInterface
     */
    public function produitsJsonAction(ProduitRepository $produitRepository): JsonResponse
    {
        $produits = $produitRepository->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($produits);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/produits/json/{id}", name="ProduitsIdJson")
     * @throws ExceptionInterface
     */
    public function produitsIdJson($id): JsonResponse
    {
        $produits = $this->getDoctrine()->getManager()
            ->getRepository(Produit::class)->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($produits);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/produits/json/delete/{id}", name="deleteProduitsJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteProduitsJsonAction($id): JsonResponse
    {
        $produits = $this->getDoctrine()
            ->getRepository(Produit::class)->find($id);
        $this->getDoctrine()->getManager()->remove($produits);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($produits);
        return new JsonResponse($formatted);
    }
}

