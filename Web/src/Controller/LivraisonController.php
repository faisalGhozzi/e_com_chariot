<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Entity\Livreur;
use App\Entity\Produit;
use App\Entity\User;
use App\Repository\AdresseRepository;
use App\Repository\LivreurRepository;
use App\Repository\ProduitRepository;
use Knp\Component\Pager\PaginatorInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LivraisonRepository;
use App\Form\LivraisonType;


class LivraisonController extends AbstractController
{
    /**
     * @Route("/livraison", name="app_livraison")
     */
    public function index(): Response
    {
        return $this->render('livraison/index.html.twig', [
            'controller_name' => 'LivraisonController',
        ]);
    }

    /**
     * @Route("/admin/livraisons/list", name="Livraisons")
     */
    public function listLLivraison(LivraisonRepository $repository,Request $request, PaginatorInterface $paginator){
        $livraisons= $repository->findAll();
        $livraisons= $paginator->paginate(
            $livraisons, //on passe les données
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            5
        );
        return $this->render("livraison/listlivraison.html.twig",
            array('livraisons'=>$livraisons));
    }
    /**
     * @Route("/admin/livraisons/{id}/affecter", name="affecter")
     */
    public function affecter($id,LivreurRepository $repository,Request $request, PaginatorInterface $paginator)
    {
        $livreurs= $repository->findAll();
        $livreurs = $paginator->paginate(
            $livreurs, //on passe les données
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            5
        );
        return $this->render("livreur/affecterlivreur.html.twig",array("idlivraison"=>$id,"livreurs"=>$livreurs));
    }

    /**
     * @Route("admin/livraisons/{id}/livreur/{idlivreur}", name="choisirlivreur")
     */
    public function choisirlivreur($idlivreur,$id,LivraisonRepository $repository)
    {
        $livraison= $repository->find($id);
        $livreur = $this->getDoctrine()->getRepository(Livreur::class)->find($idlivreur);
        $livraison->setIdLivreur($livreur);
        $livraison->setEtat(1);
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $this->get('session')->getFlashBag('info','l\'affectation est realise avec success');
        return $this->redirectToRoute("Livraisons");
    }

    /**
     * @Route("/profile/user/livraisons", name="livraisonsUsers")
     */
    public function listlivraisonsByuser(Request $request,LivraisonRepository $repository, PaginatorInterface $paginator){
        $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());
        $livraison = $this->getDoctrine()->getManager()
            ->getRepository(Livraison::class)
            ->findBy(['iduser' => $user]);

        $livraison = $paginator->paginate(
            $livraison, //on passe les données
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            2
        );
        return $this->render("livraison/listlivraisonclient.html.twig",
            array('livraisons'=>$livraison));
    }

    /**
     * @Route("/profile/user/livraisons/filtre/{type}", name="filtres")
     */
    public function filtrelivraisonsByuser( $type,Request $request,LivraisonRepository $repository, PaginatorInterface $paginator){

        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT l
            FROM  App\Entity\Livraison l
            WHERE l.iduser = :id
            AND l.type = :type'
        )
            ->setParameter('type', $type)
            ->setParameter('id', $this->getUser());

        $livraison=$query->getResult();
        $livraison = $paginator->paginate(
            $livraison, //on passe les données
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            2
        );
        return $this->render("livraison/listlivraisonclient.html.twig",
            array('livraisons'=>$livraison));
    }

    /**
     * @Route("/addLivraison",name="addLivraison")
     */
    public function addLivraison(Request $request, ProduitRepository $produitRepository, AdresseRepository $adresseRepository)
    {
        $products = $request->query->get('arr');
        $livraison= new Livraison();
        $adresses = $adresseRepository->findBy(array('iduser' => $this->getUser()));
        $form= $this->createForm(LivraisonType::class,$livraison);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            foreach ($products as $product){
                for($i = 0; $i < intval($product['qte']); $i++){
                    $newLivraison = new Livraison();
                    $produit = $produitRepository->find(intval($product['id']));
                    $newLivraison->setType($form->getData()->getType());
                    $newLivraison->setAdresse($form->getData()->getAdresse());
                    $newLivraison->setIdProduit($produit);
                    $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());
                    $newLivraison->setIduser($user);
                    $newLivraison->setEtat(0);
                    $em->persist($newLivraison);
                }
            }
            $em->flush();
            return $this->redirectToRoute("livraisonsUsers");
        }
        return $this->render("livraison/addlivraison.html.twig",array("form"=>$form->createView()));
    }
}
