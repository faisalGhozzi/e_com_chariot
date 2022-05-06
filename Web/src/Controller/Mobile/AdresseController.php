<?php

namespace App\Controller\Mobile;

use App\Entity\Adresse;
use App\Entity\User;
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
    public function newAdresseJson(Request $request): JsonResponse
    {
        $adresse = new Adresse();

        $em = $this->getDoctrine()->getManager();

        $adresse->setNummaison($request->get('nummaison'));
        $adresse->setRue($request->get('rue'));
        $adresse->setVille($request->get('ville'));
        $user = $this->getDoctrine()->getRepository(User::class)->find($request->get('iduser'));
        $adresse->setIduser($user);

        $em->persist($adresse);
        $em->flush();

        return new JsonResponse($adresse);
    }

    /**
     * @Route("/adresses/json/update", name="AdressesJsonUpdateAction")
     */
    public function updateAdresseJson(Request $request): JsonResponse
    {
        $em = $this->getDoctrine()->getManager();

        $adresse = $em->getRepository(Adresse::class)->find($request->get('id'));

        $adresse->setNummaison($request->get('nummaison'));
        $adresse->setRue($request->get('rue'));
        $adresse->setVille($request->get('ville'));

        $em->flush();

        return new JsonResponse($adresse);
    }

    /**
     * @Route("/adresses/json/{id}", name="AdressesJsonAction")
     * @throws ExceptionInterface
     */
    public function adressesJsonAction($id): JsonResponse
    {
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->find($id);
        $adresses = $this->getDoctrine()->getManager()
            ->getRepository(Adresse::class)->findBy(['iduser' => $user]);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($adresses);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/adresses/json/{id}", name="AdressesIdJson")
     * @throws ExceptionInterface
     */
    public function adressesIdJson($id): JsonResponse
    {
        $adresses = $this->getDoctrine()->getManager()
            ->getRepository(Adresse::class)->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($adresses);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/adresses/json/delete/{id}", name="deleteAdressesJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteAdressesJsonAction($id): JsonResponse
    {
        $adresses = $this->getDoctrine()
            ->getRepository(Adresse::class)->find($id);
        $this->getDoctrine()->getManager()->remove($adresses);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($adresses);
        return new JsonResponse($formatted);
    }

}