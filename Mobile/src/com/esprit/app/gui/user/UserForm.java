/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.user;

import com.codename1.components.FloatingActionButton;
import com.codename1.components.MultiButton;
import com.codename1.io.FileSystemStorage;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.User;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.reservation.ReservationForm;
import com.esprit.app.services.UserService;
import java.io.DataOutputStream;
import java.io.IOException;
import java.io.OutputStream;
import java.util.ArrayList;


// Page d'affichage de l'ensemble des users depuis la base des donées
public class UserForm extends BaseForm{
    UserService userService = new UserService();
    public ArrayList<User> users;
    @SuppressWarnings("unused")
    private Resources theme;
    
    public UserForm(Resources res){
        super("Users List", GridLayout.autoFit());
        this.theme = theme;
        
        FloatingActionButton fab = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
        fab.createSubFAB(FontImage.MATERIAL_LIST, "").addActionListener((evt) -> {
            try{
                String path = "/storage/sdcard0/my_csv_file.csv";
                OutputStream os = FileSystemStorage.getInstance().openOutputStream(path);

                DataOutputStream dos = new DataOutputStream(os);

                String headers = "ID,FIRSTNAME,LASTNAME,EMAIL\n";
                                dos.writeChars(headers);
                                for(User user : users){
                                    dos.writeChars(user.csvFormat());
                                }
                                dos.flush();
                                dos.close();
                            }
            catch(Exception e){
                e.printStackTrace();
            }
        });
        
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
                new UserDetailsForm(res, user).show();
            });
            // Ajout du multibutton dans le Container "list"
            list.add(mb);
        }
        
        fab.bindFabToContainer(this);
        
        // Declaration d'un button dans le toolbar afin de retourner à la page précedente
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new HomeForm(res).showBack();
        });
        
        // Declaration d'un button dans le toolbar afin d'ajouter un nouveau utilisateur
        this.getToolbar().addCommandToRightBar("add", null, (evt) -> {
            new AddUserForm(res, 0).show();
        });
        // Ajout du Container "list" dans le view afin de l'afficher
        this.add(list);
        
        fab.bindFabToContainer(this);

    }
}
