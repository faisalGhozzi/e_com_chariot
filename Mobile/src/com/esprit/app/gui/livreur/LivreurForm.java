/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.livreur;

import com.codename1.components.MultiButton;
import com.codename1.ui.Container;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Livreur;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.livreur.AddLivreurForm;
import com.esprit.app.gui.livreur.LivreurDetailsForm;
import com.esprit.app.services.LivreurService;
import java.util.ArrayList;

public class LivreurForm extends BaseForm{
    LivreurService livreurService = new LivreurService();
    public ArrayList<Livreur> livreurs;
    @SuppressWarnings("unused")
    private Resources theme;
    
    public LivreurForm(Resources res){
        super("Livreurs List", GridLayout.autoFit());
        this.theme = theme;
        
        livreurs = new LivreurService().getAllLivreurs();
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Livreur livreur : livreurs) {
            MultiButton mb = new MultiButton(livreur.getNom()+' '+livreur.getPrenom());
            mb.setTextLine2(livreur.getEmail());
            mb.addActionListener((evt) -> {
                new LivreurDetailsForm(res, livreur).show();
            });
            list.add(mb);
        }
        
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new HomeForm(res).showBack();
        });
        
        this.getToolbar().addCommandToRightBar("add", null, (evt) -> {
            new AddLivreurForm(res, 0).show();
        });
        this.add(list);
    }
}
