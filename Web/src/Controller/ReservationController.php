<?php

namespace App\Controller;

use App\Entity\Salle;
use App\Form\ReservationType;
use App\Form\UpdateType;
use App\Repository\ReservationRepository;
use App\Repository\SalleRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="app_reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }

    /**
     * @Route("/deleteReservation/{id}",name="deleteReservation")
     */
    public function deleteReservation($id,ReservationRepository $reservationRepository)
    {
        $reservation=$reservationRepository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute("SalledetailFront",array('id'=>$reservation->getIdSalle()->getIdsalle()));
    }

    /**
     * @Route("/updateReservation/{id}", name="updateReservation")
     */
    public function updateReservation( Request $request,ReservationRepository $reservationRepository,$id)
    {
        $reservation= $reservationRepository->find($id);
        $form= $this->createForm(ReservationType::class,$reservation);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
           /* if($reservation->getNbrp()>$reservation->getIdSalle()->getCapacite()){
                return $this->render("reservation/index.html.twig",array('form'=>$form->createView(),'salle'=>$reservation->getIdSalle(),'errNbr'=>'le nombre des personnes doit etre inférieur ou egal a '.$reservation->getIdSalle()->getCapacite()));
            }*/
            if($reservation->getNbrp()>$reservation->getIdSalle()->getCapacite()){
                return $this->render("reservation/index.html.twig",array('form'=>$form->createView(),'salle'=>$reservation->getIdSalle(),'errNbr'=>'le nombre des personnes doit etre inférieur ou egal a '.$reservation->getIdSalle()->getCapacite()));
            }
            if($reservationRepository->find($id)->getDate() !== $reservation->getDate()){
                if($reservationRepository->findBySalleAndDate($reservation->getIdSalle(),$reservation->getDate())==0){
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    return $this->redirectToRoute("SalledetailFront",array('id'=>$reservation->getIdSalle()->getIdsalle()));
                }
                else{
                    return $this->render("reservation/index.html.twig",array('form'=>$form->createView(),'salle'=>$reservation->getIdSalle(),'err'=>'il existe une réservation à la date choisie'));
                }
            }
            else{
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                return $this->redirectToRoute("SalledetailFront",array('id'=>$reservation->getIdSalle()->getIdsalle()));
            }
        }
        return $this->render("reservation/index.html.twig",array('form'=>$form->createView(),'salle'=>$reservation->getIdSalle()));
    }

    /**
     * @Route("/PDFReservation/{id}",name="PDFReservation")
     */
    public function PDFReservation($id,ReservationRepository $reservationRepository)
    {
        $reservation=$reservationRepository->find($id);

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->render("reservation/pdf.html.twig",array('reservation'=>$reservation));

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("reservation.pdf", [
            "Attachment" => true
        ]);



        return $this->redirectToRoute("SalledetailFront",array('id'=>$reservation->getIdSalle()->getIdsalle()));
    }


}
