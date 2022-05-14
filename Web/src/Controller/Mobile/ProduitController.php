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
     * @Route("/produits/json/new", name="newProduitJsonAction")
     */
    public function newSalleJsonAction(Request $request, CategorieRepository $categorieRepository): JsonResponse
    {
        $produit = new Produit();

        $em = $this->getDoctrine()->getManager();

        $produit->setNomproduit($request->get('nomproduit'));
        $produit->setQuantite($request->get('quantite'));
        $produit->setPrix($request->get('prix'));
        $produit->setImage($request->get('produits_directory'));
        $produit->setDescription($request->get('description'));
        $produit->setIdCateg($categorieRepository->find($request->get('idCateg')));
        $em->persist($produit);
        $em->flush();
        return new JsonResponse($produit);
    }

    /**
     * @Route("/produits/json/update", name="updateProduitJsonAction")
     */
    public function updateSalleJsonAction(ProduitRepository $produitRepository, CategorieRepository $categorieRepository, Request $request): JsonResponse
    {
        $em = $this->getDoctrine()->getManager();

        $produit = $produitRepository->find($request->get('idproduit'));
        $produit->setNomproduit($request->get('nomproduit'));
        $produit->setQuantite($request->get('quantite'));
        $produit->setPrix($request->get('prix'));
        $produit->setImage($request->get('produits_directory'));
        $produit->setDescription($request->get('description'));
        $produit->setIdCateg($categorieRepository->find($request->get('idCateg')));
        $em->flush();
        return new JsonResponse($produit);
    }

    /**
     * @param Request $request
     * @Route("/produits/json/upload",name="uploadsProduitsJson",methods={"GET","POST"})
     * @return JsonResponse
     */
    public function uploadImage(Request $request)
    {

        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);

        if ((($_FILES["file"]["type"] == "image/*") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 5000000) && in_array($extension, $allowedExts)) {
            if ($_FILES["file"]["error"] > 0) {
                $named_array = array("Response" => array(array("Status" => "error")));
                return new JsonResponse($named_array);

            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], $this->getParameter('produits_directory').$_FILES["file"]["name"]);

                $Path = $_FILES["file"]["name"];
                $named_array = array("Response" => array(array("Status" => "ok")));
                return new JsonResponse($named_array);
            }
        } else {
            $named_array = array("Response" => array(array("Status" => "invalid")));
            return new JsonResponse($named_array);

        }
    }


    /**
     * @Route("/produits/json/categorie/{id}", name="ProduitsJsonAction")
     * @throws ExceptionInterface
     */
    public function produitsJsonAction($id, CategorieRepository $categorieRepository, ProduitRepository $produitRepository): JsonResponse
    {
        $categorie = $categorieRepository->find($id);
        $produits = $produitRepository->findBy(array('idCateg' => $categorie));

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($produits);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/produits/json/{id}", name="ProduitsIdJson")
     * @throws ExceptionInterface
     */
    public function produitsIdJson($id, ProduitRepository $produitRepository): JsonResponse
    {
        $produits = $produitRepository->find($id);

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