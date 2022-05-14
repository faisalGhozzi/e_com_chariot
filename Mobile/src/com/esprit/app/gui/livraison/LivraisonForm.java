/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.livraison;

import com.codename1.components.FloatingActionButton;
import com.codename1.components.MultiButton;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Adresse;
import com.esprit.app.entity.Livraison;
import com.esprit.app.entity.User;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.livraison.AddLivraisonForm;
import com.esprit.app.gui.produits.AddProduitsForm;
import com.esprit.app.gui.produits.ProduitsForm;
import com.esprit.app.services.AdresseService;
import com.esprit.app.services.LivraisonService;
import com.esprit.app.services.UserService;
import java.util.ArrayList;

public class LivraisonForm extends BaseForm{
    private LivraisonService ls = new LivraisonService();
    private UserService us = new UserService();
    private AdresseService as = new AdresseService();
    private ArrayList<Livraison> livraisons;
    
    public LivraisonForm(Resources res){
        super("Livraisons w/o livreur", GridLayout.autoFit());
                
        this.revalidate();
        livraisons = ls.getLivraisonsWithoutLivreur();
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Livraison livraison : livraisons) {
            User u = us.getUser(livraison.getUser());
            Adresse a = as.getAdresse(livraison.getAdresse());
            MultiButton mb = new MultiButton(u.getNom()+" "+u.getPrenom());
            mb.setTextLine2(a.getVille()+" / "+livraison.getType());
            mb.addActionListener((evt) -> {    
                new LivraisonDetailsForm(res, livraison).show();
            });
            list.add(mb);
        }
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new HomeForm(res).showBack();
        });
        this.add(list);   
    }
}