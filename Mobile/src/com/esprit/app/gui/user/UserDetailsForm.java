/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.user;

import com.codename1.ui.Button;
import com.codename1.ui.util.Resources;
import com.codename1.components.SpanLabel;


import com.codename1.ui.Form;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.esprit.app.services.UserService;
import com.esprit.app.entity.User;

// Page d'affichage d'un seul utilisaeur
public class UserDetailsForm extends Form{
    @SuppressWarnings("unused")
    private Resources theme;
    private UserService us = new UserService();
    
    
    public UserDetailsForm(Form previous,Resources theme,User u){
        super("User Details",BoxLayout.y());
        Button update = new Button("Update");

        SpanLabel nom = new SpanLabel("Nom : "+u.getNom());
        SpanLabel prenom = new SpanLabel("Prenom : "+u.getPrenom());
        SpanLabel email = new SpanLabel("E-mail : "+u.getEmail());

        // Button de redirection vers la page d'ajout avec un ID qui va rendre cette page une page de modification
        update.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new AddUserForm(previous, theme, u.getId()).show();
            }
        });
        
        this.addAll(nom, prenom, email, update);
        
        


        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.showBack();
        });
        
        // Definition d'un button de supression de l'utilisateur
        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
            us.deleteUser(u.getId());
            previous.showBack();
        });
    }
}
