<?php

namespace App\Controller\Mobile;

use App\Entity\Reservation;
use App\Entity\Salle;
use App\Form\ReservationType;
use App\Form\UpdateType;
use App\Repository\ReservationRepository;
use App\Repository\SalleRepository;
use App\Repository\UserRepository;
use DateTime;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ReservationController extends AbstractController
{

    /**
     * @Route("/reservations/json/new", name="ReservationsJsonNewAction")
     */
    public function newReservationJson(UserRepository $userRepository, SalleRepository $salleRepository, Request $request): JsonResponse
    {
        $reservation = new Reservation();

        $em = $this->getDoctrine()->getManager();

        $reservation->setDate(new DateTime($request->get('date')));
        $reservation->setNbrp($request->get('nbrp'));
        $salle = $salleRepository->find($request->get('idsalle'));
        $reservation->setIdSalle($salle);
        $user = $userRepository->find($request->get('iduser'));
        $reservation->setIdClient($user);
        $em->persist($reservation);
        $em->flush();

        return new JsonResponse($reservation);
    }

    /**
     * @Route("/reservations/json/update", name="ReservationsJsonUpdateAction")
     */
    public function updateAdresseJson(ReservationRepository $reservationRepository, Request $request): JsonResponse
    {
        $em = $this->getDoctrine()->getManager();

        $reservation = $reservationRepository->find($request->get('id'));

        $reservation->setDate(new DateTime($request->get('date')));
        $reservation->setNbrp($request->get('nbrp'));
        $reservation->setIdSalle($reservation->getIdSalle());
        $reservation->setIdClient($reservation->getIdClient());
        $em->flush();

        return new JsonResponse($reservation);
    }

    /**
     * @Route("/reservations/json/salle/{id}", name="ReservationsJsonAction")
     * @throws ExceptionInterface
     */
    public function reservationsJsonAction($id, SalleRepository $salleRepository, ReservationRepository $reservationRepository): JsonResponse
    {
        $salle = $salleRepository->find($id);

        $reservations = $reservationRepository->findBy(array('idSalle' => $salle));

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reservations);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/reservations/json/user/{id}", name="ReservationsUserJsonAction")
     * @throws ExceptionInterface
     */
    public function reservationsUserJsonAction($id, UserRepository $userRepository, ReservationRepository $reservationRepository): JsonResponse
    {
        $user = $userRepository->find($id);

        $reservations = $reservationRepository->findBy(array('idClient' => $user));

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reservations);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/reservations/json/{id}", name="ReservationsIdJson")
     * @throws ExceptionInterface
     */
    public function reservationsIdJson(ReservationRepository $reservationRepository, $id): JsonResponse
    {
        $reservations = $reservationRepository->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reservations);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/reservations/json/delete/{id}", name="deleteReservationsJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteReservationsJsonAction(ReservationRepository $reservationRepository, $id): JsonResponse
    {
        $reservations = $reservationRepository->find($id);
        $this->getDoctrine()->getManager()->remove($reservations);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reservations);
        return new JsonResponse($formatted);
    }
}