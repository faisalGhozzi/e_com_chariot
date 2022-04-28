/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

public class Salle {
    private int id;
    private String nom;
    private float prix;
    private String image;
    private int capacite;

    public Salle() {
    }

    public Salle(String nom, float prix, String image, int capacite) {
        this.nom = nom;
        this.prix = prix;
        this.image = image;
        this.capacite = capacite;
    }

    public Salle(int id, String nom, float prix, String image, int capacite) {
        this.id = id;
        this.nom = nom;
        this.prix = prix;
        this.image = image;
        this.capacite = capacite;
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

    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public int getCapacite() {
        return capacite;
    }

    public void setCapacite(int capacite) {
        this.capacite = capacite;
    }

    @Override
    public String toString() {
        return "Salle{" + "nom=" + nom + ", prix=" + prix + ", image=" + image + ", capacite=" + capacite + '}';
    }    
    
}
