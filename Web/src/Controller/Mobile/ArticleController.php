<?php

namespace App\Controller\Mobile;

use App\Entity\Article;
use App\Entity\Commentaire;
use App\Entity\Rating;
use App\Entity\User;
use App\Form\ArticleType;
use App\Form\CommentaireType;
use App\Form\RatingType;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommentaireRepository;
use App\Repository\RatingRepository;
use App\Repository\UserRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ArticleController extends AbstractController
{

    /**
     * @Route("/article/json", name="ArticlesJsonAction")
     * @throws ExceptionInterface
     */
    public function articlesJsonAction(ArticleRepository $articleRepository): JsonResponse
    {
        $articles = $articleRepository->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($articles);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/article/json/new", name="ArticlesJsonNewAction")
     */
    public function newArticleJson(UserRepository $userRepository, Request $request): JsonResponse
    {
        $article = new Article();

        $em = $this->getDoctrine()->getManager();

        $article->setImage($request->get('image'));
        $article->setTitre($request->get('titre'));
        $article->setContenu($request->get('contenu'));
        $article->setEtat('desarchive');
        $article->setNbrreact(0);

        $user = $userRepository->find($request->get('auteur'));

        $article->setAuteur($user);

        $em->persist($article);
        $em->flush();

        return new JsonResponse($article);
    }

    /**
     * @Route("/article/json/update", name="ArticlesJsonUpdateAction")
     */
    public function updateArticleJson(ArticleRepository $articleRepository, Request $request): JsonResponse
    {
        $em = $this->getDoctrine()->getManager();

        $article = $articleRepository->find($request->get('id'));

        $article->setImage($request->get('image'));
        $article->setTitre($request->get('titre'));
        $article->setContenu($request->get('contenu'));
        $article->setEtat('desarchive');

        $em->persist($article);
        $em->flush();

        return new JsonResponse($article);
    }


    /**
     * @Route("/article/json/{id}", name="ArticlesIdJson")
     * @throws ExceptionInterface
     */
    public function articlesIdJson(ArticleRepository $articleRepository, $id): JsonResponse
    {
        $articles = $articleRepository->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($articles);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/article/json/delete/{id}", name="deleteArticlesJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteArticlesJsonAction(ArticleRepository $articleRepository, $id): JsonResponse
    {
        $articles = $articleRepository->find($id);
        $this->getDoctrine()->getManager()->remove($articles);
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($articles);
        return new JsonResponse($formatted);
    }
}

