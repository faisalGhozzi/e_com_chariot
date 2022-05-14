/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

import java.util.Date;

public class Reservation {
    private int id;
    private Date date;
    private int nbp;
    private int salle;
    private int client;

    public Reservation() {
    }

    public Reservation(Date date, int nbp, int salle, int client) {
        this.date = date;
        this.nbp = nbp;
        this.salle = salle;
        this.client = client;
    }

    public Reservation(int id, Date date, int nbp, int salle, int client) {
        this.id = id;
        this.date = date;
        this.nbp = nbp;
        this.salle = salle;
        this.client = client;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public int getNbp() {
        return nbp;
    }

    public void setNbp(int nbp) {
        this.nbp = nbp;
    }

    public int getSalle() {
        return salle;
    }

    public void setSalle(int salle) {
        this.salle = salle;
    }

    public int getClient() {
        return client;
    }

    public void setClient(int client) {
        this.client = client;
    }

    @Override
    public String toString() {
        return "Reservation{" + "date=" + date + ", nbp=" + nbp + ", salle=" + salle + ", client=" + client + '}';
    }
    
    
}
