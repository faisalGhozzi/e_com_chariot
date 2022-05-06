/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.user;

import com.codename1.ui.Button;
import com.codename1.ui.TextField;
import com.codename1.ui.Form;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.User;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.services.UserService;

public class AddUserForm extends Form{
    
    @SuppressWarnings("unused")
    private Resources theme;
    private User u = new User();
    private UserService us = new UserService();
    
    
    public AddUserForm(Form previous, Resources theme, int id){
        super(id == 0 ? "Add User" : "Update User",BoxLayout.y());
        if (id != 0){
            u = us.getUser(id);
        }     
        Button add = new Button(id == 0 ? "Create": "Update");
        TextField nom = new TextField(id == 0 ? "" : u.getNom(), "Nom");
        TextField prenom = new TextField(id == 0 ? "" : u.getPrenom(), "Prenom");
        TextField email = new TextField(id == 0 ? "" : u.getEmail(), "Email");
        TextField password = new TextField("","Password");

        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                User u = new User(email.getText(), nom.getText(), prenom.getText(), password.getText());
                if ( id == 0 ){
                    us.addUser(u);
                }else{
                    u.setId(id);
                    us.updateUser(u);
                }             
                previous.show();
            }
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.show();
        });
        addAll(nom, prenom, email, password, add);     
    }
}
