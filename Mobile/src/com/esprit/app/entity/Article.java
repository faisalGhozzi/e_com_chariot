/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

public class Article {
    private int id;
    private String contenu;
    private String titre;
    private String etat;
    private String image;
    private int nbrreact;
    private int auteur;

    public Article() {
    }

    public Article(String contenu, String titre, String etat, String image, int nbrreact, int auteur) {
        this.contenu = contenu;
        this.titre = titre;
        this.etat = etat;
        this.image = image;
        this.nbrreact = nbrreact;
        this.auteur = auteur;
    }

    public Article(int id, String contenu, String titre, String etat, String image, int nbrreact, int auteur) {
        this.id = id;
        this.contenu = contenu;
        this.titre = titre;
        this.etat = etat;
        this.image = image;
        this.nbrreact = nbrreact;
        this.auteur = auteur;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getContenu() {
        return contenu;
    }

    public void setContenu(String contenu) {
        this.contenu = contenu;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public int getNbrreact() {
        return nbrreact;
    }

    public void setNbrreact(int nbrreact) {
        this.nbrreact = nbrreact;
    }

    public int getAuteur() {
        return auteur;
    }

    public void setAuteur(int auteur) {
        this.auteur = auteur;
    }

    @Override
    public String toString() {
        return "Article{" + "contenu=" + contenu + ", titre=" + titre + ", etat=" + etat + ", image=" + image + ", nbrreact=" + nbrreact + ", auteur=" + auteur + '}';
    }
    
    
}
