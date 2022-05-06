<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CardController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index(SessionInterface $session, ProduitRepository $produitRepository)
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

        return $this->render('card/index.html.twig', array("dataPanier"=>$dataPanier, "total"=>$total));
    }

    /**
     * @Route("/cart/add/{id}", name="cart_add")
     */
    public function add($id, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);

        if(!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id] = 1;
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("cart");
    }

    /**
     * @Route("/cart/remove/{id}", name="cart_remove")
     */
    public function remove(ProduitRepository $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $product->getIdproduit();

        if(!empty($panier[$id])){
            if($panier[$id] > 1){
                $panier[$id]--;
            }else{
                unset($panier[$id]);
            }
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("cart_index");
    }

    /**
     * @Route("/cart/delete/{id}", name="cart_delete")
     */
    public function delete(ProduitRepository $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $product->getIdproduit();

        if(!empty($panier[$id])){
            unset($panier[$id]);
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("cart_index");
    }

    /**
     * @Route("/cart/delete", name="cart_delete_all")
     */
    public function deleteAll(SessionInterface $session)
    {
        $session->remove("panier");

        return $this->redirectToRoute("cart_index");
    }


}
