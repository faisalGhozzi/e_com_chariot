<?php

namespace App\Controller\Mobile;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Routing\Annotation\Route;


class CategorieController extends AbstractController
{

    /**
     * @Route("/categories/json", name="CategoriesJsonAction")
     * @throws ExceptionInterface
     */
    public function categoriesJsonAction(CategorieRepository $categorieRepository): JsonResponse
    {
        $categories = $categorieRepository->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($categories);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/categories/json/new", name="CategoriesJsonNewAction")
     */
    public function newCategorieJson(Request $request): JsonResponse
    {
        $categorie = new Categorie();

        $em = $this->getDoctrine()->getManager();

        $categorie->setNomcateg($request->get('nomcateg'));
        $categorie->setDescription($request->get('description'));

        $em->persist($categorie);
        $em->flush();

        return new JsonResponse($categorie);
    }

    /**
     * @Route("/Categories/json/{id}", name="CategoriesIdJson")
     * @throws ExceptionInterface
     */
    public function CategoriesIdJson($id): JsonResponse
    {
        $Categories = $this->getDoctrine()->getManager()
            ->getRepository(Categorie::class)->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Categories);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/categories/json/delete/{id}", name="deleteCategoriesJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteCategoriesJsonAction($id): JsonResponse
    {
        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)->find($id);
        $this->getDoctrine()->getManager()->remove($categories);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($categories);
        return new JsonResponse($formatted);
    }
}
