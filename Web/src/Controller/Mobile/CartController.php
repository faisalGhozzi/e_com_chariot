<?php

namespace App\Controller\Mobile;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CartController extends AbstractController
{

    /**
     * @Route("/cart/json", name="cartJson", methods={"GET","POST"})
     */
    public function index(SessionInterface $session, ProduitRepository $produitRepository): JsonResponse
    {
        $panier = $session->get("panier", []);

        // On "fabrique" les données
        $dataPanier = [];
        $total = 0;

        foreach($panier as $id => $quantite){
            $product = $produitRepository->find($id);
            $dataPanier[] = [
                "produit" => $product,
                "quantite" => $quantite
            ];
            if($product==null){
                $total=0;
            }
            else{
                $total += $product->getPrix() * $quantite;
            }
        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($dataPanier);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/cart/json/add", name="cartJsonAdd")
     */
    public function add(SessionInterface $session, ProduitRepository $produitRepository, Request $request)
    {
        // On récupère le panier actuel
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('produit');
        $panier = $session->get("panier", []);
        $produit = $produitRepository->find($id);
        $produit->setQuantite($produit->getQuantite()-1);
        if(!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id] = 1;
        }
        $em->flush();
        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return new JsonResponse($produit);
    }

    /**
     * @Route("/cart/json/remove/", name="cartJsonRemove")
     */
    public function remove(ProduitRepository $product, SessionInterface $session, Request $request)
    {
        // On récupère le panier actuel
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('produit');
        $panier = $session->get("panier", []);
        $produit = $product->find($id);
        $produit->setQuantite($produit->getQuantite()+1);
        if(!empty($panier[$id])){
            if($panier[$id] > 1){
                $panier[$id]--;
            }else{
                unset($panier[$id]);
            }
        }
        $em->flush();
        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return new JsonResponse("Item removed", 200);
    }

    /**
     * @Route("/cart/json/delete", name="cartJsonDelete")
     */
    public function delete(ProduitRepository $product, SessionInterface $session, Request $request)
    {
        // On récupère le panier actuel
        $em = $this->getDoctrine()->getManager();
        $panier = $session->get("panier", []);
        $id = $request->get('produit');
        $produit = $product->find($id);
        $produit->setQuantite($produit->getQuantite() + $session->get("panier")[$id]);
        if(!empty($panier[$id])){
            unset($panier[$id]);
        }
        $em->flush();
        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return new JsonResponse("Item Deleted", 200);
    }

    /**
     * @Route("/cart/json/delete/all", name="cartJsonDeleteAll")
     */
    public function deleteAll(SessionInterface $session, ProduitRepository $produitRepository)
    {
        $em = $this->getDoctrine()->getManager();
        foreach ($session->get("panier") as $key => $value){
            $produit = $produitRepository->find($key);
            $produit->setQuantite($produit->getQuantite() + $value);
        }
        $em->flush();

        $session->remove("panier");

        return new JsonResponse("Deleted", 200); 
    }


}
