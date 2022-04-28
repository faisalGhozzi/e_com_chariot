/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

public class Adresse {
    private int id;
    private String ville;
    private String rue;
    private int numMaison;
    private int idUser;

    public Adresse() {
    }

    public Adresse(String ville, String rue, int numMaison, int idUser) {
        this.ville = ville;
        this.rue = rue;
        this.numMaison = numMaison;
        this.idUser = idUser;
    }

    public Adresse(int id, String ville, String rue, int numMaison, int idUser) {
        this.id = id;
        this.ville = ville;
        this.rue = rue;
        this.numMaison = numMaison;
        this.idUser = idUser;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getVille() {
        return ville;
    }

    public void setVille(String ville) {
        this.ville = ville;
    }

    public String getRue() {
        return rue;
    }

    public void setRue(String rue) {
        this.rue = rue;
    }

    public int getNumMaison() {
        return numMaison;
    }

    public void setNumMaison(int numMaison) {
        this.numMaison = numMaison;
    }

    public int getIdUser() {
        return idUser;
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;
    }
    
    @Override
    public String toString() {
        return "Adresse{" + "ville=" + ville + ", rue=" + rue + ", numMaison=" + numMaison + ", idUser=" + idUser + '}';
    }
    
}
