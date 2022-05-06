<?php

namespace App\Controller;

use Knp\Component\Pager\PaginatorInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AdresseRepository;
use App\Entity\Adresse;
use App\Entity\User;
use App\Form\AdresseType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class AdresseController extends AbstractController
{
    /**
     * @Route("/adresse", name="app_adresse")
     */
    public function index(): Response
    {
        return $this->render('adresse/listadresse.html.twig', [
            'controller_name' => 'AdresseController',
        ]);
    }

    /**
     * @Route("/removeAdresse/{id}",name="deleteAdresse")
     */
    public function deleteAdresse($id)
    {
        $adresse= $this->getDoctrine()->getRepository(Adresse::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($adresse);
        $em->flush();
        $flashy->info('Cet adresse a ete supprime');
        return $this->redirectToRoute("adresses");
    }

    /**
     * @Route("profile/user/addAdresse",name="addAdresse")
     */
    public function addAdresse( Request $request)
    {
        $adresse= new Adresse();
        $form= $this->createForm(AdresseType::class,$adresse);
        $form->handleRequest($request);
        if($form->isSubmitted()  && $form->isValid() ){
            $em = $this->getDoctrine()->getManager();
            $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());
            $adresse->setIduser($user);
            $em->persist($adresse);
            $em->flush();
            $this->get('session')->getFlashBag('info','Une nouvelle adresse est ajouté');
            return $this->redirectToRoute("adresses");
        }
        return $this->render("adresse/addadresse.html.twig",array("form"=>$form->createView()));
    }

    /**
     * @Route("/updateAdresse/{id}", name="updateAdresse")
     */
    public function updateAdresse( Request $request,AdresseRepository $repository,$id)
    {
        $adresse= $repository->find($id);
        $form= $this->createForm(AdresseType::class,$adresse);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->get('session')->getFlashBag('info','adresse a ete modifier');
            return $this->redirectToRoute("adresses");
        }
        return $this->render("adresse/updateadresse.html.twig",array("adresse"=>$adresse,"form"=>$form->createView()));
    }

    /**
     * @Route("/listAdresses", name="adresses")
     */
    public function listAdressesByuser(Request $request,AdresseRepository $repository,PaginatorInterface $paginator){

        $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());
        $adresses = $this->getDoctrine()->getManager()
            ->getRepository(Adresse::class)
            ->findBy(['iduser' => $user]);


        $adresses= $paginator->paginate(
            $adresses, //on passe les données
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            2
        );
        return $this->render("adresse/listadresse.html.twig",array("adresses"=>$adresses,"ville" => $adresses));

    }

    /**
     * @Route("/listvilles", name="villes")
     */
    public function listvilles( Request $request,AdresseRepository $repository,PaginatorInterface $paginator){

        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT a
            FROM  App\Entity\Adresse a
            WHERE a.iduser = :id
            ORDER BY a.ville asc'
        )
            ->setParameter('id', $this->getUser());

        $adresses=$query->getResult();

        $adresses= $paginator->paginate(
            $adresses, //on passe les données
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            2
        );
        return $this->render("adresse/listadresse.html.twig",
            array('adresses'=>$adresses));
    }



}
