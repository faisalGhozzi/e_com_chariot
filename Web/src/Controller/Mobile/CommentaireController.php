<?php

namespace App\Controller\Mobile;

use App\Entity\Commentaire;
use App\Repository\CommentaireRepository;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\Date;

class CommentaireController extends AbstractController
{
    /**
     * @Route("/commentaires/json", name="CommentairesJsonAction")
     * @throws ExceptionInterface
     */
    public function commentairesJsonAction(CommentaireRepository $commentaireRepository): JsonResponse
    {
        $commentaires = $commentaireRepository->findAll();

        $normalizer = new ObjectNormalizer();
        $normalizer->setIgnoredAttributes(['reacts']);
        $serializer = new Serializer([$normalizer]);
        $formatted = $serializer->normalize($commentaires);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/commentaires/json/new", name="CommentairesJsonNewAction")
     */
    public function newCommentaireJson(ArticleRepository $articleRepository, UserRepository $userRepository, Request $request): JsonResponse
    {
        $commentaire = new Commentaire();
        $user = $userRepository->find($request->get('user'));
        $article = $articleRepository->find($request->get('article'));

        $em = $this->getDoctrine()->getManager();

        $commentaire->setContenuC($request->get('contenuC'));
        $commentaire->setDatepub(new \DateTime());
        $commentaire->setIdArticle($article);
        $commentaire->setAuteurC($user);

        $em->persist($commentaire);
        $em->flush();

        return new JsonResponse($commentaire);
    }

    /**
     * @Route("/commentaires/json/update", name="CommentairesJsonUpdateAction")
     */
    public function updateCommentaireJson(CommentaireRepository $commentaireRepository, Request $request): JsonResponse
    {

        $em = $this->getDoctrine()->getManager();

        $commentaire = $commentaireRepository->find($request->get('id'));
        $commentaire->setContenuC($request->get('contenuC'));
        $commentaire->setDatepub(new \DateTime());
        $em->flush();

        return new JsonResponse($commentaire);
    }

    /**
     * @Route("/commentaires/json/{id}", name="CommentairesIdJson")
     * @throws ExceptionInterface
     */
    public function CommentairesIdJson(CommentaireRepository $commentaireRepository, $id): JsonResponse
    {
        $commentaires = $commentaireRepository->find($id);
        
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commentaires);
        return new JsonResponse($formatted);
    }


    /**
     * @Route("/commentaires/json/delete/{id}", name="deleteCommentairesJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteCommentairesJsonAction(CommentaireRepository $commentaireRepository, $id): JsonResponse
    {
        $commentaires = $commentaireRepository->find($id);
        $this->getDoctrine()->getManager()->remove($commentaires);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commentaires);
        return new JsonResponse($formatted);
    }
}
