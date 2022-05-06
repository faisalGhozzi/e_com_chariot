<?php

namespace App\Controller\Mobile;

use App\Entity\Reservation;
use App\Entity\Salle;
use App\Form\ReservationType;
use App\Form\UpdateType;
use App\Repository\ReservationRepository;
use App\Repository\SalleRepository;
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
     * @Route("/reservations/json", name="ReservationsJsonAction")
     * @throws ExceptionInterface
     */
    public function reservationsJsonAction(): JsonResponse
    {
        $reservations = $this->getDoctrine()->getManager()
            ->getRepository(Reservation::class)->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reservations);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/reservations/json/{id}", name="ReservationsIdJson")
     * @throws ExceptionInterface
     */
    public function reservationsIdJson($id): JsonResponse
    {
        $reservations = $this->getDoctrine()->getManager()
            ->getRepository(Reservation::class)->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reservations);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/reservations/json/delete/{id}", name="deleteReservationsJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteReservationsJsonAction($id): JsonResponse
    {
        $reservations = $this->getDoctrine()
            ->getRepository(Reservation::class)->find($id);
        $this->getDoctrine()->getManager()->remove($reservations);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reservations);
        return new JsonResponse($formatted);
    }
}
