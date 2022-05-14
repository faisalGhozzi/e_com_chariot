/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

public class User {
    private int id;
    private String email;
    private String nom;
    private String prenom;
    private String password;

    public User() {
    }

    public User(String email, String nom, String prenom, String password) {
        this.email = email;
        this.nom = nom;
        this.prenom = prenom;
        this.password = password;
    }

    public User(int id, String email, String nom, String prenom, String password) {
        this.id = id;
        this.email = email;
        this.nom = nom;
        this.prenom = prenom;
        this.password = password;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String csvFormat() {
        return id+","+nom+","+prenom+","+email;
    }
    
    @Override
    public String toString() {
        return "User{" + "email=" + email + ", nom=" + nom + ", prenom=" + prenom + ", password=" + password + '}';
    }
    
    
    
    
    
}
