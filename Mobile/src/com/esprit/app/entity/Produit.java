/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

public class Produit {
    private int id;
    private String nom;
    private int quantite;
    private float prix;
    private String description;
    private String image;
    private int categorie;

    public Produit() {
    }

    public Produit(String nom, int quantite, float prix, String description, String image, int categorie) {
        this.nom = nom;
        this.quantite = quantite;
        this.prix = prix;
        this.description = description;
        this.image = image;
        this.categorie = categorie;
    }

    public Produit(int id, String nom, int quantite, float prix, String description, String image, int categorie) {
        this.id = id;
        this.nom = nom;
        this.quantite = quantite;
        this.prix = prix;
        this.description = description;
        this.image = image;
        this.categorie = categorie;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public int getQuantite() {
        return quantite;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public int getCategorie() {
        return categorie;
    }

    public void setCategorie(int categorie) {
        this.categorie = categorie;
    }

    @Override
    public String toString() {
        return "Produit{" + "nom=" + nom + ", quantite=" + quantite + ", prix=" + prix + ", description=" + description + ", image=" + image + ", categorie=" + categorie + '}';
    }
      
}
