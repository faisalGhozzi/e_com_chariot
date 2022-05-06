<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LivreurRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Livreur;
use App\Form\LivreurType;
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
     * @Route("/livreur", name="app_livreur")
     */
    public function index(): Response
    {
        return $this->render('livreur/listlivreur.html.twig', [
            'controller_name' => 'LivreurController',
        ]);
    }

    /**
     * @Route("/admin/livreurs/list", name="Livreurs")
     */
    public function listLivreur(LivreurRepository $repository, Request $request, PaginatorInterface $paginator)
    {
        $livreurs = $repository->findAll();
        $livreurs = $paginator->paginate(
            $livreurs, //on passe les données
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            5
        );
        return $this->render("livreur/listlivreur.html.twig",
            array('livreurs' => $livreurs));
    }

    /**
     * @Route("/admin/livreurs/remove/{id}",name="deleteLivreur")
     */
    public function deleteLivreur($id,FlashyNotifier $flashy)
    {
        $livreur = $this->getDoctrine()->getRepository(Livreur::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($livreur);
        $em->flush();
        $flashy->info('Ce livreur a ete supprime');
        return $this->redirectToRoute("Livreurs");
    }

    /**
     * @Route("/admin/livreurs/new",name="addLivreur")
     */
    public function addLivreur(Request $request,MailerInterface $mailer)
    {
        $livreur = new Livreur();
        $form = $this->createForm(LivreurType::class, $livreur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($livreur);
            $em->flush();
            {
                $email = (new TemplatedEmail())
                    ->from('ichariottest11@gmail.com')
                    ->to($livreur->getEmail())
                    ->subject('Bienvenue')
                    ->htmlTemplate('livreur/Emaillivreur.html.twig');
                $mailer->send($email);
                $this->get('session')->getFlashBag('info','Un nouveau livreur est ajouté');
                return $this->redirectToRoute("Livreurs");
            }
        }
        return $this->render("livreur/addlivreur.html.twig", array("livreurform" => $form->createView()));
    }

    /**
     * @Route("/admin/livreurs/update/{id}", name="updateLivreur")
     */
    public function updateLivreur(Request $request, LivreurRepository $repository, $id)
    {
        $livreur = $repository->find($id);
        $form = $this->createForm(LivreurType::class, $livreur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->get('session')->getFlashBag('info','Ce livreur a ete modifier');
            return $this->redirectToRoute("Livreurs");
        }
        return $this->render("livreur/updatelivreur.html.twig", array("livreur" => $livreur, "form" => $form->createView()));
    }

    /**
     * Creates a new ActionItem entity.
     *
     * @Route("/search", name="ajax_search")
     *
     */
    public function searchAction (Request $request): Response
    {
        $em =$this->getDoctrine()->getManager();
        $requestString =$request->get('q');
        $livreurs=$em->getRepository(Livreur::class)->findEntitiesByString($requestString);
        if(!$livreurs){
            $result['livreurs']['error']="livreur not found";
        }else{
            $result['livreurs']=$this->getRealEntities($livreurs);
        }
        return new Response(json_encode($result));
    }

    public function getRealEntities($livreurs)
    {
        foreach($livreurs as $livreur){
            $realEntities[$livreur->getIdlivreur()]=[$livreur->getNomlivreur(),$livreur->getPrenom()];
        }
        return $realEntities;
    }

    /**
     * @Route("/admin/livreurs/details/{id}", name="details")
     */
    public function details (Request $request,$id)
    {
        $livreur = $this->getDoctrine()->getRepository(Livreur::class)->find($id);
        return $this->render("livreur/detailslivreur.html.twig",
            array('l'=>$livreur));
    }

    /**
     * @Route("/admin/livreurs/stat", name="LivreursStat")
     */
   public function stat(ChartBuilderInterface $chartBuilder): Response
   {
       //livreur par nbr livraison
       $livreur = $this->getDoctrine()->getRepository(Livreur::class)->findAll();
       $livreurNom = [];
       $all=[];
       $numlivraisons=[];
       foreach($livreur as $l){
           $entityManager = $this->getDoctrine()->getManager();
           $query = $entityManager->createQuery(
               'SELECT COUNT(l) 
            FROM  App\Entity\Livraison l
             JOIN l.idLivreur c 
             WHERE l.idLivreur = :id'
           )
               ->setParameter('id', $l->getIdlivreur());
           $livreurNom[] = $l->getNomlivreur();
           $all[]=$query->getResult();

       }
       foreach($all as $l){
           foreach($l as $li) {
               foreach($li as $lo) {
                   $numlivraisons[] = $lo;
               }
           }
       }

//livraison par type
       $query = $entityManager->createQuery(
           'SELECT COUNT(l) 
            FROM  App\Entity\Livraison l
            WHERE l.type = :rapide'
       )
           ->setParameter('rapide', "rapide");
       $numrapide[]= [json_encode($query->getResult())];

       $query = $entityManager->createQuery(
           'SELECT COUNT(l) 
            FROM  App\Entity\Livraison l
            WHERE l.type = :normal'
       )
           ->setParameter('normal', "normal");
       $numnormal[]= [json_encode($query->getResult())];

       //adresse par nbr livraison
       $adresse = $this->getDoctrine()->getRepository(Adresse::class)->findAll();
       $ville = [];
       $alladd=[];
       $nbrliv=[];
       foreach($adresse as $l){
           $entityManager = $this->getDoctrine()->getManager();
           $query = $entityManager->createQuery(
               'SELECT COUNT(l) 
            FROM  App\Entity\Livraison l
             JOIN l.adresse c 
             WHERE l.adresse = :id'
           )
               ->setParameter('id', $l->getIdAdresse());

           $ville[] = $l->getVille();
           $alladd[]=$query->getResult();

       }
       foreach($alladd as $l){
           foreach($l as $li) {
               foreach($li as $lo) {
                   $nbrliv[] = $lo;
               }
           }
       }

       return $this->render('livreur/statistique.html.twig',['l'=>json_encode($livreurNom),'num'=>json_encode($numlivraisons),
           'numrapide'=>json_encode($numrapide[0][0][6]),'numnormal'=>json_encode($numnormal[0][0][6]),
           'ville'=>json_encode($ville),'nbr'=>json_encode($nbrliv),

       ])
           ;
   }


}

