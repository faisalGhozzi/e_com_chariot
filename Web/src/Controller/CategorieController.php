<?php

namespace App\Controller;


use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use ReclamationBundle\Entity\archive;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="app_categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }


    /**
     * @Route("/admin/categories", name="categorieAdmin")
     */
    public function categorieAdmin(CategorieRepository $repository){
        $categories= $repository->findAll();
        return $this->render("categorie/listcategoriesAdmin.html.twig",
            array('categories'=>$categories));
    }

    /**
     * @Route("/admin/addCategorie",name="addCategorie")
     */
    public function addProduit( Request $request)
    {
        $categ= new Categorie();
        $form= $this->createForm(CategorieType::class,$categ);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($categ);
            $em->flush();
            return $this->redirectToRoute("categorieAdmin");
        }
        return $this->render("categorie/addCategorie.html.twig",array("categform"=>$form->createView()));
    }

    /**
     * @Route("/admin/updateCategorie/{id}", name="updateCategorie")
     */
    public function updateCategorie(Request $request,CategorieRepository $categorieRepository,$id)
    {
        $categ= $categorieRepository->find($id);
        $form= $this->createForm(CategorieType::class,$categ);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("categorieAdmin");
        }

        return $this->render("categorie/updateCategorie.html.twig",array("categ"=>$categ,"categform"=>$form->createView()));
    }

    /**
     * @Route("/deleteCategorie/{id}",name="deleteCategorie")
     */
    public function deleteCategorie($id,ProduitRepository $produitRepository)
    {
        $categ= $this->getDoctrine()->getRepository(Categorie::class)->find($id);
        $produits=$produitRepository->findBy(array('idCateg'=>$categ));
        $em=$this->getDoctrine()->getManager();
        foreach ($produits as $produit) {
            $em->remove($produit);
            $em->flush();
        }

        $em->remove($categ);
        $em->flush();
        return $this->redirectToRoute("categorieAdmin");
    }

    /**
     * @Route("/categories", name="categories")
     */
    public function categories(CategorieRepository $repository){
        $categories= $repository->findAll();
        return $this->render("categorie/listcategories.html.twig",
            array('categories'=>$categories));
    }

    /**
     * @Route("/rechercheCategorie", name="rechercheCategorie")
     */
    public function rechercheCategorie(CategorieRepository $repository,Request $request){
        $categories= $repository->rechercher($request->get('valeur'));
        if(!$categories) {
            $result['categories']['error'] = "Aucune catégorie trouvé";
        } else {
            $result['categories'] = $this->getRealEntities($categories);
        }

        return new Response(json_encode($result));
    }

    public function getRealEntities($categories)
    {
        foreach ($categories as $c) {
            $realEntities[$c->getIdcateg()] = [$c->getNomcateg(),$c->getDescription()];
        }
        return $realEntities;
    }

    /**
     * @Route("/admin/stats/categories", name="categorieStatsAdmin")
     */
    public function categorieStatsAdmin(CategorieRepository $repository,ProduitRepository $produitRepository){
        $pieChart = new PieChart();
        $data= array();
        $stat=['Produits', '%'];
        $nb=0;
        array_push($data,$stat);

        $categories = $repository->findAll();
        $total=count($categories);
        foreach ($categories as $cat){
            $nbr=count($produitRepository->findBy(array('idCateg'=>$cat->getIdcateg())));

            $stat=array();
            $moy=($nbr *100)/$total;
            array_push($stat,$cat->getNomcateg(),($moy));
            $stat=[$cat->getNomcateg(),$moy];
            array_push($data,$stat);
        }

        $pieChart->getData()->setArrayToDataTable(
            $data
        );



        $pieChart->getOptions()->setTitle('Pourcentages des Produits');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);


        return $this->render('categorie/stats.html.twig', array('piechart' => $pieChart));
    }

}
