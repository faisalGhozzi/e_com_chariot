/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.user;

import com.codename1.components.FloatingActionButton;
import com.codename1.ui.Button;
import com.codename1.ui.util.Resources;
import com.codename1.components.SpanLabel;
import com.codename1.ui.FontImage;


import com.codename1.ui.Form;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.esprit.app.services.UserService;
import com.esprit.app.entity.User;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.adresse.AdresseForm;
import com.esprit.app.gui.reservation.ReservationForm;
import java.io.IOException;

// Page d'affichage d'un seul utilisaeur
public class UserDetailsForm extends BaseForm{
    @SuppressWarnings("unused")
    private Resources theme;
    private UserService us = new UserService();
    
    
    public UserDetailsForm(Resources res,User u){
        super("User Details",BoxLayout.y());
        Button update = new Button("Update");
        
        FloatingActionButton fab = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
        fab.createSubFAB(FontImage.MATERIAL_LIST, "").addActionListener((evt) -> {
                new ReservationForm(res, u.getId(), true).show();
        });
        fab.createSubFAB(FontImage.MATERIAL_MAP, "").addActionListener((evt) -> {
                new AdresseForm(res, u.getId()).show();
        });

        SpanLabel nom = new SpanLabel("Nom : "+u.getNom());
        SpanLabel prenom = new SpanLabel("Prenom : "+u.getPrenom());
        SpanLabel email = new SpanLabel("E-mail : "+u.getEmail());

        // Button de redirection vers la page d'ajout avec un ID qui va rendre cette page une page de modification
        update.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new AddUserForm(res, u.getId()).show();
            }
        });
        
        this.addAll(nom, prenom, email, update);
        
        fab.bindFabToContainer(this);


        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new HomeForm(res).showBack();
            //new UserForm(res).showBack();
        });
        
        // Definition d'un button de supression de l'utilisateur
        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
            us.deleteUser(u.getId());
            new UserForm(res).showBack();
        });
    }
}
