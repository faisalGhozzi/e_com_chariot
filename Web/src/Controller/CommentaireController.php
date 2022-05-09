<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Reacts;
use App\Form\CommentaireType;
use App\Repository\ArticleRepository;
use App\Repository\CommentaireRepository;
use App\Repository\ReactsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CommentaireController extends AbstractController
{
    /**
     * @Route("/commentaire", name="app_commentaire")
     */
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'controller_name' => 'CommentaireController',
        ]);
    }

    /**
     * @Route("admin/comment/delete/{id}",name="deleteCommentAdmin")
     */
    public function deleteCommentAdmin($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $commentaire=$this->getDoctrine()->getRepository(Commentaire::class)
            ->find($id);
        $idarticle=0;
        if($commentaire!=null){
            $idarticle=$commentaire->getIdArticle()->getIdarticle();
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute("articledetail",array('id'=>$idarticle));
    }


    /**
     * @Route("/deleteComment/{id}",name="deleteComment")
     */
    public function deleteComment($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $commentaire=$this->getDoctrine()->getRepository(Commentaire::class)
            ->find($id);
        $idarticle=0;
        if($commentaire!=null){
            $idarticle=$commentaire->getIdArticle()->getIdarticle();
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute("articledetail",array('id'=>$idarticle));
    }
    /**
     * @Route("/updateComment/{id}", name="updateComment")
     */
    public function updateComment(Request $request,CommentaireRepository $repository,$id)
    {
        //$check = $this->get('vangrg_profanity.checker');
        $comment= $repository->find($id);
        $form= $this->createForm(CommentaireType::class,$comment);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("articledetail",array('id'=>$comment->getIdArticle()->getIdarticle()));
        }
        return $this->render("commentaire/index.html.twig",array("form"=>$form->createView()));
    }

    /**
     * @Route("/triComments", name="triComments")
     */
    public function triComment(CommentaireRepository $repository,Request $request,ArticleRepository $articleRepository){
        $article=$articleRepository->findOneBy(array('idarticle'=>$request->get('idarticle')));
        if($request->get('type')==1){
            $comments= $repository->triRecentesCommentaires($article);
        }
        else{
            $comments= $repository->triAnciensCommentaire($article);
        }

        $serializedEntity = $this->container->get('serializer')->serialize($comments, 'json',['ignored_attributes' => ['reacts']]);

        return new Response($serializedEntity);
    }

    /**
     * @Route("/addReact",name="addReact")
     */
    public function addReact(Request $request,CommentaireRepository $commentaireRepository)
    {
        $react= new Reacts();
        $commentaire=$commentaireRepository->find($request->get('idcomment'));

        $react->setIdCommentaire($commentaire);
        $react->setIdUser($this->getUser()); // a modifier
        $react->setDatecrea(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->persist($react);
        $em->flush();
        return $this->redirectToRoute("articledetail",array('id'=>$commentaire->getIdArticle()->getIdarticle()));
    }

    /**
     * @Route("/affComments", name="affComments")
     */
    public function affComment(CommentaireRepository $repository){
        $comments=$repository->allCommentaires();

        $serializedEntity = $this->container->get('serializer')->serialize($comments, 'json',['ignored_attributes' => ['reacts']]);

        return new Response($serializedEntity);
    }

    /**
     * @Route("/react/{id}", name="comm_react")
     */
    public function reactCommentaire(int $id,ReactsRepository $reactsRepository, CommentaireRepository $comRepo) : Response{
        $selectedCom= $comRepo->find($id);
        $user = $selectedCom->getAuteurC();
        if($selectedCom->isLikedByUser($user)){
            $react = $reactsRepository->findOneBy([
                'idcommentaire' => $id,
                'idusers' => $this->getUser()
            ]);
            //$react = $reactsRepository->findByUserComment($user->getIduser(),$id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($react);
            $em->flush();
            return $this->json([
                'code' =>200,
                'message' => 'react bien supprimé',
                'react' => $reactsRepository->count(['idcommentaire' => $selectedCom])
            ],200);

        }
        $react = new Reacts();
        $react->setIdCommentaire($selectedCom);
        $react->setIdUser($selectedCom->getAuteurC()); // a modifier
        $react->setDatecrea(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->persist($react);
        $em->flush();

        return $this->json([
            'code' =>200,
            'message' => 'react bien ajouté',
            'react' => $reactsRepository->count(['idcommentaire' => $selectedCom])
            ],200);

    }
}
