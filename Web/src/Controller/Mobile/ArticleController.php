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
        $articles = $articleRepository->findByExampleField("desarchive");

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

        $article->setImage($request->get('article_directory'));
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

        $article->setImage($request->get('article_directory'));
        $article->setTitre($request->get('titre'));
        $article->setContenu($request->get('contenu'));
        $article->setEtat('desarchive');

        $em->persist($article);
        $em->flush();

        return new JsonResponse($article);
    }

    /**
     * @param Request $request
     * @Route("/article/json/upload",name="uploadJson",methods={"GET","POST"})
     * @return JsonResponse
     */
    public function uploadImage(Request $request)
    {

        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);

        if ((($_FILES["file"]["type"] == "image/*") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 5000000) && in_array($extension, $allowedExts)) {
            if ($_FILES["file"]["error"] > 0) {
                $named_array = array("Response" => array(array("Status" => "error")));
                return new JsonResponse($named_array);

            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], $this->getParameter('article_directory').$_FILES["file"]["name"]);

                $Path = $_FILES["file"]["name"];
                $named_array = array("Response" => array(array("Status" => "ok")));
                return new JsonResponse($named_array);
            }
        } else {
            $named_array = array("Response" => array(array("Status" => "invalid")));
            return new JsonResponse($named_array);

        }
    }


    /**
     * @Route("/article/json/{id}", name="ArticlesIdJson")
     * @throws ExceptionInterface
     */
    public function articlesIdJson(ArticleRepository $articleRepository, CommentaireRepository $commentaireRepository, $id): JsonResponse
    {
        $article = $articleRepository->find($id);
//        $commentaires = $commentaireRepository->findByArticle($article);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($article);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/article/json/delete/{id}", name="deleteArticlesJsonAction")
     * @throws ExceptionInterface
     */
    public function deleteArticlesJsonAction(ArticleRepository $articleRepository, $id): JsonResponse
    {
        $article = $articleRepository->find($id);
        $article->setEtat("supprimer");
        $this->getDoctrine()->getManager()->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($article);
        return new JsonResponse($formatted);
    }
}

