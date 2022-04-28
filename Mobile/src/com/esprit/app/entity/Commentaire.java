/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

import java.util.Date;

public class Commentaire {
    private int id;
    private String contenu;
    private Date datepub;
    private int article;
    private int user;

    public Commentaire() {
    }

    public Commentaire(String contenu, Date datepub, int article, int user) {
        this.contenu = contenu;
        this.datepub = datepub;
        this.article = article;
        this.user = user;
    }

    public Commentaire(int id, String contenu, Date datepub, int article, int user) {
        this.id = id;
        this.contenu = contenu;
        this.datepub = datepub;
        this.article = article;
        this.user = user;
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

    public Date getDatepub() {
        return datepub;
    }

    public void setDatepub(Date datepub) {
        this.datepub = datepub;
    }

    public int getArticle() {
        return article;
    }

    public void setArticle(int article) {
        this.article = article;
    }

    public int getUser() {
        return user;
    }

    public void setUser(int user) {
        this.user = user;
    }

    @Override
    public String toString() {
        return "Commentaire{" + "contenu=" + contenu + ", datepub=" + datepub + ", article=" + article + ", user=" + user + '}';
    }
    
    
    
}
