<?php

namespace App\Controller\Mobile;

use App\Entity\Adresse;
use App\Entity\User;
use App\Repository\AdresseRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Routing\Annotation\Route;

class AdresseController extends AbstractController
{

    /**
     * @Route("/adresses/json/new", name="AdressesJsonNewAction")
     */
    public function newAdresseJson(UserRepository $userRepository, Request $request): JsonResponse
    {
        $adresse = new Adresse();

        $em = $this->getDoctrine()->getManager();

        $adresse->setNummaison($request->get('nummaison'));
        $adresse->setRue($request->get('rue'));
        $adresse->setVille($request->get('ville'));
        $user = $userRepository->find($request->get('iduser'));
        $adresse->setIduser($user);

        $em->persist($adresse);
        $em->flush();

        return new JsonResponse($adresse);
    }

    /**
     * @Route("/adresses/json/update", name="AdressesJsonUpdateAction")
     */
    public function updateAdresseJson(AdresseRepository $adresseRepository, Request $request): JsonResponse
    {
        $em = $this->getDoctrine()->getManager();

        $adresse = $adresseRepository->find($request->get('id'));

        $adresse->setNummaison($request->get('nummaison'));
        $adresse->setRue($request->get('rue'));
        $adresse->setVille($request->get('ville'));

        $em->flush();

        return new JsonResponse($adresse);
    }

    /**
     * @Route("/adresses/json/user/{id}", name="AdressesJsonAction")
     * @throws ExceptionInterface
     */
    public function adressesJsonAction(AdresseRepository $adresseRepository, UserRepository $userRepository, $id): JsonResponse
    {
        $user = $userRepository->find($id);
        $adresses = $adresseRepository->findBy(['iduser' => $user]);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($adresses);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/adresses/json/{id}", name="AdressesIdJson")
     * @throws ExceptionInterface
     */
    public function adressesIdJson(AdresseRepository $adresseRepository, $id): JsonResponse
    {
        $adresses = $adresseRepository->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($adresses);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/adresses/json/delete/{id}", name="deleteAdressesJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteAdressesJsonAction(AdresseRepository $adresseRepository, $id): JsonResponse
    {
        $adresses = $adresseRepository->find($id);
        $this->getDoctrine()->getManager()->remove($adresses);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($adresses);
        return new JsonResponse($formatted);
    }

}