<?php

namespace App\Controller\Mobile;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Routing\Annotation\Route;


class UserController extends AbstractController
{
    /**
     * @Route("/users/json", name="UsersJsonAction")
     * @throws ExceptionInterface
     */
    public function usersJsonAction(UserRepository $userRepository): JsonResponse
    {
        $users = $userRepository->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($users);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/users/json/new", name="newUserJsonAction")
     */
    public function newUserJsonAction(Request $request, UserPasswordEncoderInterface $passwordEncoder): JsonResponse
    {
        $user = new User();

        $em = $this->getDoctrine()->getManager();

        $user->setEmail($request->get('email'));
        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setIsExpired(false);
        $user->setPassword($passwordEncoder->encodePassword($user, $request->get('password')));
        $em->persist($user);
        $em->flush();
        return new JsonResponse($user);
    }

    /**
     * @Route("/users/json/update", name="updateUserJsonAction")
     */
    public function updateUserJsonAction(UserRepository $userRepository, Request $request, UserPasswordEncoderInterface $passwordEncoder): JsonResponse
    {
        $em = $this->getDoctrine()->getManager();

        $user = $userRepository->find($request->get('id'));
        $user->setEmail($request->get('email'));
        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setIsExpired(false);
        $user->setPassword($passwordEncoder->encodePassword($user, $request->get('password')));
        $em->flush();
        return new JsonResponse($user);
    }


    /**
     * @Route("/users/json/{id}", name="UsersIdJson")
     * @throws ExceptionInterface
     */
    public function usersIdJson(UserRepository $userRepository, $id): JsonResponse
    {
        $users = $userRepository->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($users);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/users/json/delete/{id}", name="deleteUsersJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteUsersJsonAction(UserRepository $userRepository, $id): JsonResponse
    {
        $users = $userRepository->find($id);
        $this->getDoctrine()->getManager()->remove($users);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($users);
        return new JsonResponse($formatted);
    }
    
}