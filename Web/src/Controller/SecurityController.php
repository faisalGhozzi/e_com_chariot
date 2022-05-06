<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use App\Repository\UserRepository;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login2.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/loginJson", name="loginJson", methods={"POST"})
     */
    public function loginJson(Request $request, UserRepository $userRepository): JsonResponse
    {
         $user = $this->getUser();

         $user = $userRepository->findOneBy(['email'=>$request->get('email')]);
         if($user)
         {
            /*return $this->json([
                'username' => $user->getUsername(),
                'roles' => $user->getRoles(),
             ]);*/
               $serializer = new Serializer([new ObjectNormalizer()]);
               $formatted = $serializer->normalize($user);
               return new JsonResponse($formatted);
         }
        

        return $this->json(null,204);
        
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
