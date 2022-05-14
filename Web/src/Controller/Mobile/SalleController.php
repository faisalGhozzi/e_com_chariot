<?php

namespace App\Controller\Mobile;

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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\SalleType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\File;


class SalleController extends AbstractController
{
    /**
     * @Route("/salles/json", name="SallesJsonAction")
     * @throws ExceptionInterface
     */
    public function sallesJsonAction(SalleRepository $salleRepository): JsonResponse
    {
        $salles = $salleRepository->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($salles);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/salles/json/new", name="newSalleJsonAction")
     */
    public function newSalleJsonAction(Request $request): JsonResponse
    {
        $salle = new Salle();

        $em = $this->getDoctrine()->getManager();

        $salle->setNom($request->get('nom'));
        $salle->setImage($request->get('salles_directory'));
        $salle->setCapacite($request->get('capacite'));
        $salle->setPrixsalle($request->get('prixsalle'));
        $em->persist($salle);
        $em->flush();
        return new JsonResponse($salle);
    }

    /**
     * @Route("/salles/json/update", name="updateSalleJsonAction")
     */
    public function updateSalleJsonAction(SalleRepository $salleRepository, Request $request): JsonResponse
    {
        $em = $this->getDoctrine()->getManager();

        $salle = $salleRepository->find($request->get('id'));
        $salle->setNom($request->get('nom'));
        $salle->setImage($request->get('salles_directory'));
        $salle->setCapacite($request->get('capacite'));
        $salle->setPrixsalle($request->get('prixsalle'));
        $em->flush();
        return new JsonResponse($salle);
    }

    /**
     * @param Request $request
     * @Route("/salles/json/upload",name="uploadSallesJson",methods={"GET","POST"})
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
                move_uploaded_file($_FILES["file"]["tmp_name"], $this->getParameter('salles_directory').$_FILES["file"]["name"]);

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
     * @Route("/salles/json/{id}", name="SallesIdJson")
     * @throws ExceptionInterface
     */
    public function sallesIdJson(SalleRepository $salleRepository, $id): JsonResponse
    {
        $salles = $salleRepository->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($salles);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/salles/json/delete/{id}", name="deleteSallesJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteSallesJsonAction(SalleRepository $salleRepository, $id): JsonResponse
    {
        $salles = $salleRepository->find($id);
        $this->getDoctrine()->getManager()->remove($salles);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($salles);
        return new JsonResponse($formatted);
    }
}
