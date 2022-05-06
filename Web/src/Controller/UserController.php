<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\User;
use App\Form\SearchformType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Twilio\Rest\Client;

class UserController extends AbstractController
{
    /**
     * @Route("/admin/users", name="app_user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository,Request $request): Response
    {

        $data = new SearchData();
        $form = $this->createForm(SearchformType::class, $data);
        $form->handleRequest($request);

        $users= $userRepository->findSearch($data);


        return $this->render('user/index.html.twig', [
            'users' => $users,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin/users/sorted", name="app_user_tri", methods={"GET"})
     */
    public function tri(UserRepository $userRepository,Request $request): Response
    {

        $data = new SearchData();
        $form = $this->createForm(SearchformType::class, $data);
        $form->handleRequest($request);

        $users= $userRepository->tri($data);


        return $this->render('user/tri.html.twig', [
            'users' => $users,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/admin/users/new", name="app_user_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $userPasswordEncoder,UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user->setPassword(
                $userPasswordEncoder->encodePassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
            $userRepository->add($user);
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/users/{id}", name="app_user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("admin/users/edit/{id}", name="app_user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request,UserPasswordEncoderInterface $userPasswordEncoder, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordEncoder->encodePassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
            $userRepository->add($user);
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/users/delete/{id}", name="app_user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/profile/user", name="app_user_profile", methods={"GET", "POST"})
     */
    public function profile(Request $request, UserPasswordEncoderInterface $userPasswordEncoder,UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordEncoder->encodePassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
            $userRepository->add($user);
            //return $this->redirectToRoute('app_user_profile', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/Profile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/forgetPassword/user", name="forgetPassword", methods={"GET"})
     */
    public function forgetPassword(UserRepository $userRepository,Request $request, \Swift_Mailer $mailer): Response
    {
        if ($request->get('email')) {

        $user = $userRepository->findOneBy(['email' => $request->get('email')]);
        if($user) {
            $message = (new \Swift_Message('Forget Password')) //subject
            ->setFrom('houssem.abida@esprit.tn')
                ->setTo($request->get('email'))
                ->setBody("http://127.0.0.1:8000/user/changePassword/user/".$user->getId())
            ;

            $mailer->send($message);

            return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);


        }
        }
        return $this->render('security/forgetPassword.html.twig', [
        ]);
    }

    /**
     * @Route("/changePassword/user/{id}", name="changePassword", methods={"GET"})
     */
    public function changePassword(UserRepository $userRepository,Request $request, $id, UserPasswordEncoderInterface $userPasswordEncoder): Response
    {
        $error = "";
        $user = $userRepository->find($id);
        if ($request->get('newPassword') && $request->get('newPassword_')) {

            $newPassword = $request->get('newPassword');
            $newPassword_ = $request->get('newPassword_');


            if($newPassword == $newPassword_) {
                $user->setPassword(
                    $userPasswordEncoder->encodePassword(
                        $user,
                        $newPassword
                    )
                );
                $userRepository->add($user);

                return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);

            }
            else {
                $error = "Répétez le nouveau mot de passe";
            }
        }


        return $this->render('security/changePassword.html.twig', [
            'error' => $error,
        ]);
    }
}
