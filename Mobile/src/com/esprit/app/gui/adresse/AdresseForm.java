/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.adresse;

import com.codename1.components.MultiButton;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Adresse;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.user.UserDetailsForm;
import com.esprit.app.services.AdresseService;
import com.esprit.app.utils.ConnectedUser;
import java.io.IOException;
import java.util.ArrayList;

public class AdresseForm extends BaseForm{
    private AdresseService as = new AdresseService();
    private ArrayList<Adresse> adresses;
    
    public AdresseForm(Resources res, int id_user){
        super("My Adresses", GridLayout.autoFit());
        this.revalidate();
        adresses = as.getAllAdresses(id_user);
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Adresse adresse : adresses) {
            MultiButton mb = new MultiButton(String.valueOf(adresse.getNumMaison()) + ", " + adresse.getRue());
            mb.setTextLine2(adresse.getVille());
            mb.addActionListener((evt) -> {
                new AdresseDetailsForm(res, adresse).show();
            });
            list.add(mb);
        }
        this.getToolbar().addCommandToRightBar("Add", null, (evt) -> {
            new AddAdresseForm(res, 0).show();
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new UserDetailsForm(res, ConnectedUser.getConnectedUser()).showBack();
        });
        this.add(list);   
    }
}
