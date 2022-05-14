/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

public class Cart {
    private int produit;
    private int qte;

    public Cart() {
    }

    public Cart(int produit, int qte) {
        this.produit = produit;
        this.qte = qte;
    }

    public int getProduit() {
        return produit;
    }

    public void setProduit(int produit) {
        this.produit = produit;
    }

    public int getQte() {
        return qte;
    }

    public void setQte(int qte) {
        this.qte = qte;
    }

    @Override
    public String toString() {
        return "Cart{" + "produit=" + produit + ", qte=" + qte + '}';
    }
}
