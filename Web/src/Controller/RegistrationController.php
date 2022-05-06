<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Twilio\Rest\Client;


class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager, \Swift_Mailer $mailer): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
//sms
        if ($form->isSubmitted() && $form->isValid()) {
            /*$sid    = "ACce09977a0d9b73ba26b376a3ddf3956d";
            $token  = "2104909984bff94c8d512c5138d7fb7d";
            $twilio = new Client($sid, $token);

            $message = $twilio->messages
                ->create("+21626677428", // to
                    array(
                        "messagingServiceSid" => "MG244b26efeddd2cf6d803ff55c2cb6456",
                        "body" => "votre compte a eté creer evec succee"
                    )
                );

            print($message->sid);*/


            //mail
            $message = (new \Swift_Message('hello')) //subject
            ->setFrom('houssem.abida@esprit.tn')
                ->setTo('houssem.abida@esprit.tn')
               # ->setTo($form->get('email')->getData())
                #->setBody("Text")
             ;

            $mailer->send($message);
            // encode the plain password
            $user->setPassword(
            $userPasswordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register2.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
