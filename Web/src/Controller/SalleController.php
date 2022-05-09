<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Salle;
use App\Entity\User;
use App\Form\ReservationType;
use App\Form\UpdateType;
use App\Repository\ReservationRepository;
use App\Repository\SalleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\SalleType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;


class SalleController extends AbstractController
{
    /**
     * @Route("/salle", name="app_salle")
     */
    public function index(): Response
    {
        return $this->render('salle/index.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }
    /**
     * @Route("/admin/affichesalles", name="salles")
     */
    public function afficheSalle(SalleRepository $repository,Request $request,PaginatorInterface $paginator){
        $salles= $repository->findAll();
        $pagedOffers = $paginator->paginate(
            $salles, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        return $this->render("salle/afficheSalle.html.twig",
            array('salles'=>$pagedOffers));
    }
    /**
     * @Route("/removeSalle/{id}",name="d")
     */
    public function deleteSalle($id,ReservationRepository $reservationRepository)
    {
        $salle= $this->getDoctrine()->getRepository(Salle::class)->find($id);
        $reservations=$reservationRepository->findBy(array('idSalle'=>$salle));
        $em=$this->getDoctrine()->getManager();
        foreach ($reservations as $item){
            $em->remove($item);
        }

        $em->remove($salle);
        $em->flush();
        return $this->redirectToRoute("salles");
    }

/**
* @Route("/admin/addSalle",name="addSalle")
*/
    public function addSalle( Request $request)
    {
        $Salle= new Salle();
        $form= $this->createForm(SalleType::class,$Salle);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $imageFile = $form->get('img')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imageFile->move(
                        './uploads/salles',
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                $Salle->setImage($newFilename);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($Salle);
            $em->flush();
            return $this->redirectToRoute("salles");
        }
        return $this->render("salle/addSalle.html.twig",array("SalleForm"=>$form->createView()));
    }
    /**
     * @Route("/updateSalle/{id}", name="updateSalle")
     */
    public function updateSalle( Request $request,SalleRepository $repository,$id)
    {
        $salle= $repository->find($id);
        $form= $this->createForm(SalleType::class,$salle);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $imageFile = $form->get('img')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imageFile->move(
                        './uploads/salles',
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                $salle->setImage($newFilename);
            }

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("salles");
        }
        return $this->render("Salle/updateSalle.html.twig",array("salle"=>$salle,"S"=>$form->createView()));
    }

    /**
     * @Route("/salles", name="sallesfront")
     */
    public function afficheSalleFront(SalleRepository $repository){
        $salles= $repository->findAll();
        return $this->render("salle/afficheSallesFront.html.twig",
            array('salles'=>$salles));
    }

    /**
     * @Route("/salle/{id}", name="SalledetailFront")
     */
    public function SalledetailFront( Request $request,SalleRepository $repository,$id,ReservationRepository $reservationRepository,MailerInterface $mailer)
    {
        $salle= $repository->find($id);
        $reservations=$reservationRepository->findBy(array('idSalle'=>$salle));

        $reservation=new Reservation();
        $form= $this->createForm(ReservationType::class,$reservation);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $reservation->setIdSalle($salle);
            $reservation->setIdClient($this->getUser());
            if($reservation->getNbrp()>$salle->getCapacite()){
                return $this->render("Salle/sallefront.html.twig",array("salle"=>$salle,'reservations'=>$reservations,'form'=>$form->createView(),'errNbr'=>'le nombre des personnes doit etre inférieur ou egal a '.$salle->getCapacite()));
            }
            if($reservationRepository->findBySalleAndDate($salle,$reservation->getDate())==0){
                $em = $this->getDoctrine()->getManager();
                $em->persist($reservation);
                $em->flush();
                $email = (new Email())
                    ->from('your@email')
                    ->to($reservation->getIdClient()->getEmail())
                    ->subject('Réservation !')
                    ->text('Réservation ajoutée!')
                    ->html('<p>Chère '.$reservation->getIdClient()->getNom().' Félicitation ! votre réservation a été ajouté avec succés. Salle:'.$reservation->getIdSalle()->getNom().' Date de réservation:'.$reservation->getDate()->format('Y:M:D').'</p>');

                $mailer->send($email);
                $reservations=$reservationRepository->findBy(array('idSalle'=>$salle));
                return $this->render("Salle/sallefront.html.twig",array("salle"=>$salle,'reservations'=>$reservations,'form'=>$form->createView()));
            }
            else{
                return $this->render("Salle/sallefront.html.twig",array("salle"=>$salle,'reservations'=>$reservations,'form'=>$form->createView(),'err'=>'il existe une réservation à la date choisie'));
            }

        }

        return $this->render("Salle/sallefront.html.twig",array("salle"=>$salle,'reservations'=>$reservations,'form'=>$form->createView()));
    }

    /**
     * @Route("/admin/salle/{id}", name="SalledetailAdmin")
     */
    public function SalledetailAdmin( Request $request,SalleRepository $repository,$id,ReservationRepository $reservationRepository)
    {
        $salle= $repository->find($id);
        $reservations=$reservationRepository->findBy(array('idSalle'=>$salle));

        $rs = [];

        foreach($reservations as $reservation){
            $rs[] = [
                'id' => $reservation->getIdreservation(),
                'start' => $reservation->getDate()->format('Y-m-d'),
                'end' => $reservation->getDate()->format('Y-m-d'),
                'title' => $reservation->getIdClient()->getNom()." ".$reservation->getIdClient()->getPrenom(),
            ];
        }

        $data = json_encode($rs);

        return $this->render("Salle/salleAdmin.html.twig",array("salle"=>$salle,'reservations'=>$reservations,'data'=>$data));
    }

    /**
     * @Route("/rechercheSalle", name="rechercheSalle")
     */
    public function rechercheSalle(SalleRepository $repository,Request $request){
        $salles=$repository->recherchesalles($request->get('valeur'));
        $serializedEntity = $this->container->get('serializer')->serialize($salles, 'json');

        return new Response($serializedEntity);
    }

    /**
     * @Route("/triSalle", name="triSalle")
     */
    public function triSalle(SalleRepository $repository,Request $request){
        if($request->get('tri')==1){
            $salles=$repository->SallesCroissante();
        }
        else{
            $salles=$repository->SallesDecroissante();
        }

        $serializedEntity = $this->container->get('serializer')->serialize($salles, 'json');

        return new Response($serializedEntity);
    }
}
