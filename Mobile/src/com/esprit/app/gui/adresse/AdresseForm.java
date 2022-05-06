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
import com.esprit.app.services.AdresseService;
import java.io.IOException;
import java.util.ArrayList;

public class AdresseForm extends Form{
    private Resources theme;
    private AdresseService as = new AdresseService();
    private ArrayList<Adresse> adresses;
    
    public AdresseForm(Form previous, Resources res)throws IOException{
        super("My Adresses", GridLayout.autoFit());
        this.theme = theme;
        this.revalidate();
        adresses = as.getAllAdresses(1);
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Adresse adresse : adresses) {
            MultiButton mb = new MultiButton(String.valueOf(adresse.getNumMaison()) + ", " + adresse.getRue());
            mb.setTextLine2(adresse.getVille());
            mb.addActionListener((evt) -> {
                // new AdresseDetailsForm(this, theme, adresse).show();
            });
            list.add(mb);
        }
        this.getToolbar().addCommandToRightBar("Add", null, (evt) -> {
            // new AddAdresseForm(this, theme, 0, false).show();
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.show();
        });
        this.add(list);   
    }
}
