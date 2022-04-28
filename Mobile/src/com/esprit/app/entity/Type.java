/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

public class Type {
    private int id;
    private String libelle;

    public Type() {
    }

    public Type(String libelle) {
        this.libelle = libelle;
    }
    
    public Type(int id, String libelle) {
        this.id = id;
        this.libelle = libelle;
    }
   
    
}
