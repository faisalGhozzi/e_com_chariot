<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;
use App\Entity\Produit;
use App\Form\ProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Knp\Component\Pager\PaginatorInterface;

class ProduitController extends AbstractController
{
    /**
     * @Route("/admin/produits/{id}", name="ProduitsAdmin")
     */
    public function listProduit(ProduitRepository $repository,$id,CategorieRepository $categorieRepository){
        $produits= $repository->findBy(array('idCateg'=>$categorieRepository->find($id)));
        return $this->render("produit/listproduit.html.twig",
            array('produits'=>$produits,'idCateg'=>$id));
    }
 
    /**
     * @Route("/admin/produits/remove/{id}",name="deleteProduit")
     */
    public function deleteProduit($id)
    {
        $produit= $this->getDoctrine()->getRepository(Produit::class)->find($id);
        $idCat=$produit->getIdCateg()->getIdCateg();
         $em=$this->getDoctrine()->getManager();
         $em->remove($produit);
         $em->flush();
          return $this->redirectToRoute("ProduitsAdmin",array('id'=>$idCat));
    }
    /**
     * @Route("/admin/produits/add/{id}",name="addProduit")
     */
    public function addProduit( Request $request,$id,CategorieRepository $categorieRepository)
    {
        $produit= new Produit();
        $form= $this->createForm(ProduitType::class,$produit);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $imageFile = $form->get('img')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        './uploads/produits',
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                $produit->setImage($newFilename);
            }
            $produit->setIdCateg($categorieRepository->find($id));
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute("ProduitsAdmin",array('id'=>$id));
        }
        return $this->render("produit/addproduit.html.twig",array("produitform"=>$form->createView()));
    }
    /**
     * @Route("/admin/produits/update/{id}", name="updateProduit")
     */
    public function updateProduit(Request $request,ProduitRepository $produitRepository,$id)
    {
        $produit= $produitRepository->find($id);
        $form= $this->createForm(ProduitType::class,$produit);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $imageFile = $form->get('img')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        './uploads/produits',
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                $produit->setImage($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("ProduitsAdmin",array('id'=>$produit->getIdCateg()->getIdcateg()));
        }

        return $this->render("produit/updateProduit.html.twig",array("produit"=>$produit,"produitform"=>$form->createView()));
    }

    /**
     * @Route("/produits/{id}", name="Produits")
     */
    public function listProduitFront(ProduitRepository $repository,$id,CategorieRepository $categorieRepository,Request $request,PaginatorInterface $paginator){
        $categorie=$categorieRepository->find($id);
        $produits= $repository->findBy(array('idCateg'=>$categorie));
        $pagedOffers = $paginator->paginate(
            $produits, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        return $this->render("produit/listproduitfront.html.twig",
            array('produits'=>$pagedOffers,'idCateg'=>$id,'categorie'=>$categorie));

    }

    /**
     * @Route("/triProduits", name="triProduits")
     */
    public function triProduits(ProduitRepository $repository,Request $request,CategorieRepository $categorieRepository){
        $categ=$categorieRepository->findOneBy(array('idcateg'=>$request->get('idCateg')));
        if($request->get('type')==1){
            $produits= $repository->triPrixUp($categ);
        }
        else{
            $produits= $repository->triPrixDown($categ);
        }

        $serializedEntity = $this->container->get('serializer')->serialize($produits, 'json');

        return new Response($serializedEntity);
    }
}

