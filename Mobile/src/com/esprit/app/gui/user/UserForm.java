/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.user;

import com.codename1.components.MultiButton;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.User;
import com.esprit.app.services.UserService;
import java.io.IOException;
import java.util.ArrayList;


// Page d'affichage de l'ensemble des users depuis la base des donées
public class UserForm extends Form{
    UserService userService = new UserService();
    public ArrayList<User> users;
    @SuppressWarnings("unused")
    private Resources theme;
    
    public UserForm(Form previous, Resources res)throws IOException{
        super("Users List", GridLayout.autoFit());
        this.theme = theme;
        
        // recuperation des users et l'affectation dans une liste
        users = new UserService().getAllUsers();
        Container list = new Container(BoxLayout.y());
        // cette commande va permetre le Scrolling horizontale du contenaire list
        list.setScrollableY(true);
        for (User user : users) {
            // le MultiButton est un button qui peur comporter au max 2 lignes de text et une image
            MultiButton mb = new MultiButton(user.getEmail());
            mb.setTextLine2(user.getNom()+' '+user.getPrenom());
            mb.addActionListener((evt) -> {
                // Redirection vers la page Detail de l'utilisateur selectionnée 
                new UserDetailsForm(this, theme, user).show();
            });
            // Ajout du multibutton dans le Container "list"
            list.add(mb);
        }
        
        // Declaration d'un button dans le toolbar afin de retourner à la page précedente
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.showBack();
        });
        
        // Declaration d'un button dans le toolbar afin d'ajouter un nouveau utilisateur
        this.getToolbar().addCommandToRightBar("add", null, (evt) -> {
            new AddUserForm(previous, theme, 0).show();
        });
        // Ajout du Container "list" dans le view afin de l'afficher
        this.add(list);
    }
}
