/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.categorie;

import com.codename1.components.FloatingActionButton;
import com.codename1.components.MultiButton;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Categorie;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.produits.AddProduitsForm;
import com.esprit.app.gui.produits.ProduitsForm;
import com.esprit.app.gui.reservation.ReservationForm;
import com.esprit.app.services.CategorieService;
import java.io.IOException;
import java.util.ArrayList;

public class CategorieForm extends BaseForm{
    private CategorieService as = new CategorieService();
    private ArrayList<Categorie> categories;
    
    public CategorieForm(Resources res){
        super("My Categories", GridLayout.autoFit());
        
        FloatingActionButton fab = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
        fab.createSubFAB(FontImage.MATERIAL_TOYS, "").addActionListener((evt) -> {
                new AddProduitsForm(res, 0).show();
        });
        
        this.revalidate();
        categories = as.getAllCategories();
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Categorie categorie : categories) {
            MultiButton mb = new MultiButton(categorie.getNom());
            mb.setTextLine2(categorie.getDescription());
            mb.addActionListener((evt) -> {    
                new ProduitsForm(res, categorie.getId()).show();
            });
            list.add(mb);
        }
        this.getToolbar().addCommandToRightBar("Add", null, (evt) -> {
            new AddCategorieForm(res, 0).show();
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new HomeForm(res).showBack();
        });
        this.add(list);   
        fab.bindFabToContainer(this);

    }
}
