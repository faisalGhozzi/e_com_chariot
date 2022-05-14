/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.utils;

import com.esprit.app.entity.User;

public class ConnectedUser {
    private static User connectedUser = null;

    public static void setUserStatus(User user){
        connectedUser = user;
    }
    
    public static User getConnectedUser() {
        return connectedUser;
    }
}
