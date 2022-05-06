<?php

namespace App\Controller\Mobile;

use App\Entity\Commentaire;
use App\Repository\CommentaireRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CommentaireController extends AbstractController
{
    /**
     * @Route("/commentaires/json", name="CommentairesJsonAction")
     * @throws ExceptionInterface
     */
    public function commentairesJsonAction(CommentaireRepository $commentaireRepository): JsonResponse
    {
        $commentaires = $commentaireRepository->allCommentaires();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commentaires);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/commentaires/json/delete/{id}", name="deleteCommentairesJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteCommentairesJsonAction($id): JsonResponse
    {
        $commentaires = $this->getDoctrine()
            ->getRepository(Commentaire::class)->find($id);
        $this->getDoctrine()->getManager()->remove($commentaires);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commentaires);
        return new JsonResponse($formatted);
    }
}
