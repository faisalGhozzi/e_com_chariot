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
    public function add($id, SessionInterface $session, ProduitRepository $produitRepository)
    {
        // On récupère le panier actuel
        $em = $this->getDoctrine()->getManager();
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

        return $this->redirectToRoute("cart");
    }

    /**
     * @Route("/cart/remove/{id}", name="cart_remove")
     */
    public function remove($id, ProduitRepository $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $em = $this->getDoctrine()->getManager();
        $panier = $session->get("panier", []);
//        $id = $product->getIdproduit();
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

        return $this->redirectToRoute("cart");
    }

    /**
     * @Route("/cart/delete/{id}", name="cart_delete")
     */
    public function delete($id, ProduitRepository $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $em = $this->getDoctrine()->getManager();
        $panier = $session->get("panier", []);
        $produit = $product->find($id);
        $produit->setQuantite($produit->getQuantite() + $session->get("panier")[$id]);
        if(!empty($panier[$id])){
            unset($panier[$id]);
        }
        $em->flush();
        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("cart");
    }

    /**
     * @Route("/cart/delete", name="cart_delete_all")
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

        return $this->redirectToRoute("cart");
    }


}
