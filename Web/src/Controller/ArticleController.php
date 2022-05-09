<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Commentaire;
use App\Entity\Rating;
use App\Form\ArticleType;
use App\Form\CommentaireType;
use App\Form\RatingType;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommentaireRepository;
use App\Repository\RatingRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="category_select")
     */
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'categories' => $categorieRepository->findAll(),
        ]);
    }
    /**
     * @Route("/admin/articles", name="getarticles")
     */
    public function afficheArticle(ArticleRepository $repository,Request $request,PaginatorInterface $paginator){
        $articles= $repository->findByExampleField("desarchive");
        $pagedArticles = $paginator->paginate(
            $articles, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        return $this->render("article/afficheArticle.html.twig",
            array('articles'=>$pagedArticles));
    }

    /**
     * @Route("admin/articles/remove/{id}",name="deleteArticle")
     */
    public function deleteArticle($id)
    {
        $em=$this->getDoctrine()->getManager();
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);
        $article->setEtat("supprimer");
        $em->flush();

        return $this->redirectToRoute("getarticles");
    }
    /**
     * @Route("/admin/articles/new",name="addArticle")
     */
    public function addArticle( Request $request)
    {

        $article= new article();
        $form= $this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $file = $article->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('article_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $article->setImage($fileName);
            $em = $this->getDoctrine()->getManager();
            $article->setEtat("desarchive");
            $em->persist($article);
            $em->flush();
            return $this->redirectToRoute("getarticles");
        }
        return $this->render("article/formAddarticle.html.twig",array("articleform"=>$form->createView()));
    }

    /**
     * @Route("admin/articles/update/{id}", name="updateArticle")
     */
    public function updateArticle( Request $request,ArticleRepository $repository,$id)
    {
        $article= $repository->find($id);
        $form= $this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $file = $article->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('article_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $article->setImage($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("getarticles");
        }
        return $this->render("article/updateArticle.html.twig",array("article"=>$article,"articleformi"=>$form->createView()));
    }

    /**
     * @Route("/admin/articles/{id}", name="articledetailadmin")
     */
    public function ArticleAdmin(ArticleRepository $articleRepository,CommentaireRepository $commentaireRepository,$id){
        $article= $articleRepository->find($id);
        $commentaires=$commentaireRepository->findByArticle($article);
        return $this->render("article/articleAdmin.html.twig",
            array('article'=>$article,'commentaires'=>$commentaires));
    }

    /**
     * @Route("/articles/{id}", name="articledetail")
     */
    public function Article(ArticleRepository $articleRepository,CommentaireRepository $commentaireRepository,RatingRepository $ratingRepository,$id,Request $request){
        $article= $articleRepository->find($id);
        $commentaires=$commentaireRepository->findByArticle($article);
        $ratings=$ratingRepository->findBy(array('article'=>$article));
        $total=0;
        $nbr=0;
        foreach ($ratings as $r){
            $total+=$r->getNote();
            $nbr++;
        }
        if($nbr==0){
            $moy=0;
        }
        else{
            $moy=$total/$nbr;
        }


        $commentaire=new Commentaire();
        $form= $this->createForm(CommentaireType::class,$commentaire);
        $form->handleRequest($request);

        $rating=new Rating();
        $formRating=$this->createForm(RatingType::class,$rating);
        $formRating->handleRequest($request);

        if($formRating->isSubmitted() && $formRating->isValid()){
            $rating->setArticle($article);
            $rating->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($rating);
            $em->flush();
            return $this->redirectToRoute("articledetail",array('id'=>$id));
        }

        if($form->isSubmitted() && $form->isValid()){
            $commentaire->setIdArticle($article);
            $commentaire->setAuteurC($this->getUser());
            $commentaire->setDatepub(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
            return $this->redirectToRoute("articledetail",array('id'=>$id));
        }
        return $this->render("article/article.html.twig",
            array('article'=>$article,'commentaires'=>$commentaires,'form'=>$form->createView(),'formRating'=>$formRating->createView(),'rating'=>round($moy, 2)));
    }

    /**
     * @Route("/articles", name="articles")
     */
    public function Articles(ArticleRepository $repository){
        $articles= $repository->findByExampleField("desarchive");
        return $this->render("article/affichearticlesfront.html.twig",
            array('articles'=>$articles));
    }

    /**
     * @Route("/searchArticle", name="searcharticles")
     */
    public function searchArticle(ArticleRepository $repository,Request $request){
        $articles= $repository->search($request->get('val'));
        if(!$articles) {
            $result['articles']['error'] = "Aucun Article trouvé";
        } else {
            $result['articles'] = $this->getRealEntities($articles);
        }

        return new Response(json_encode($result));
    }

    public function getRealEntities($articles)
    {
        foreach ($articles as $article) {
            $realEntities[$article->getIdarticle()] = [$article->getTitre(),$article->getContenu(),$article->getEtat(),$article->getImage(),$article->getAuteur()->getNom()];
        }
        return $realEntities;
    }

    /**
     * @Route("/PDFArticles",name="PDFArticles")
     */
    public function PDFArticles(ArticleRepository $repository)
    {


        $pdfoptions=new Options();
        $pdfoptions->set('defaultFont','Arial');
        //$pdfoptions->setIsRemoteEnabled(true);
        $pdfoptions->set('isHtml5ParserEnabled',true);
        $pdfoptions->set('isRemoteEnabled',true);
        $dompdf= new Dompdf($pdfoptions);
        $articles=$repository->findByExampleField("desarchive");
        $html=$this->renderView('article/pdf.html.twig',[
            'articles'=>$articles
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4','landscape');

        $dompdf->render();
        $dompdf->stream("articles.pdf", ["Attachment"=>false]);


    }
}

