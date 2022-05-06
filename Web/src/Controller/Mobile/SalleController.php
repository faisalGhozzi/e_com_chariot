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
        $salle->setImage($request->get('image'));
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
        $salle->setImage($request->get('image'));
        $salle->setCapacite($request->get('capacite'));
        $salle->setPrixsalle($request->get('prixsalle'));
        $em->flush();
        return new JsonResponse($salle);
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
