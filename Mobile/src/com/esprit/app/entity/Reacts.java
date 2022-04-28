/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.entity;

import java.util.Date;

public class Reacts {
    private int id;
    private int user;
    private Date datecrea;

    public Reacts() {
    }

    public Reacts(int user, Date datecrea) {
        this.user = user;
        this.datecrea = datecrea;
    }

    public Reacts(int id, int user, Date datecrea) {
        this.id = id;
        this.user = user;
        this.datecrea = datecrea;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getUser() {
        return user;
    }

    public void setUser(int user) {
        this.user = user;
    }

    public Date getDatecrea() {
        return datecrea;
    }

    public void setDatecrea(Date datecrea) {
        this.datecrea = datecrea;
    }

    @Override
    public String toString() {
        return "Reacts{" + "user=" + user + ", datecrea=" + datecrea + '}';
    }
    
}
