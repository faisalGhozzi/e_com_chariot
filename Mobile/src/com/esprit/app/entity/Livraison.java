/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

public class Livraison {
    private int id;
    private boolean etat;
    private String type;
    private int produit;
    private int adresse;
    private int livreur;
    private int user;

    public Livraison() {
    }

    public Livraison(boolean etat, String type, int produit, int adresse, int livreur, int user) {
        this.etat = etat;
        this.type = type;
        this.produit = produit;
        this.adresse = adresse;
        this.livreur = livreur;
        this.user = user;
    }

    public Livraison(int id, boolean etat, String type, int produit, int adresse, int livreur, int user) {
        this.id = id;
        this.etat = etat;
        this.type = type;
        this.produit = produit;
        this.adresse = adresse;
        this.livreur = livreur;
        this.user = user;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public boolean isEtat() {
        return etat;
    }

    public void setEtat(boolean etat) {
        this.etat = etat;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public int getProduit() {
        return produit;
    }

    public void setProduit(int produit) {
        this.produit = produit;
    }

    public int getAdresse() {
        return adresse;
    }

    public void setAdresse(int adresse) {
        this.adresse = adresse;
    }

    public int getLivreur() {
        return livreur;
    }

    public void setLivreur(int livreur) {
        this.livreur = livreur;
    }

    public int getUser() {
        return user;
    }

    public void setUser(int user) {
        this.user = user;
    }

    @Override
    public String toString() {
        return "Livraison{" + "etat=" + etat + ", type=" + type + ", produit=" + produit + ", adresse=" + adresse + ", livreur=" + livreur + ", user=" + user + '}';
    }
       
}
