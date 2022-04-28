/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

public class Panier {
    private int id;
    private int produit;

    public Panier() {
    }

    public Panier(int produit) {
        this.produit = produit;
    }

    public Panier(int id, int produit) {
        this.id = id;
        this.produit = produit;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getProduit() {
        return produit;
    }

    public void setProduit(int produit) {
        this.produit = produit;
    }

    @Override
    public String toString() {
        return "Panier{" + "produit=" + produit + '}';
    }
    
    
}
