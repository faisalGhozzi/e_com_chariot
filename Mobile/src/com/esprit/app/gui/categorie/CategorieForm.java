/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.categorie;

import com.codename1.components.MultiButton;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Categorie;
import com.esprit.app.services.CategorieService;
import java.io.IOException;
import java.util.ArrayList;

public class CategorieForm extends Form{
    private Resources theme;
    private CategorieService as = new CategorieService();
    private ArrayList<Categorie> categories;
    
    public CategorieForm(Form previous, Resources res)throws IOException{
        super("My Categories", GridLayout.autoFit());
        this.theme = theme;
        this.revalidate();
        categories = as.getAllCategories();
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Categorie categorie : categories) {
            MultiButton mb = new MultiButton(categorie.getNom());
            mb.setTextLine2(categorie.getDescription());
            mb.addActionListener((evt) -> {
                new CategorieDetailsForm(this, theme, categorie).show();
            });
            list.add(mb);
        }
        this.getToolbar().addCommandToRightBar("Add", null, (evt) -> {
            new AddCategorieForm(this, theme, 0).show();
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.show();
        });
        this.add(list);   
    }
}
