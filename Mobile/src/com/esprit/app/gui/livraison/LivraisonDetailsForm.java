/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.livraison;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Livraison;
import com.esprit.app.entity.Produit;
import com.esprit.app.entity.User;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.livraison.AddLivraisonForm;
import com.esprit.app.gui.livraison.LivraisonForm;
import com.esprit.app.services.LivraisonService;
import com.esprit.app.services.ProduitService;
import com.esprit.app.services.UserService;

public class LivraisonDetailsForm extends BaseForm{
    
    @SuppressWarnings("unused")
    private Resources theme;
    private LivraisonService ls = new LivraisonService();
    private UserService us = new UserService();
    private ProduitService ps = new ProduitService();
    
    
    public LivraisonDetailsForm(Resources res,Livraison l){
        super("Livraison Details",BoxLayout.y());
        
        User u = us.getUser(l.getUser());
        Produit p = ps.getProduit(l.getProduit());
        
        Button update = new Button("Affectation livreur");
        
        SpanLabel type = new SpanLabel("Type : "+l.getType());
        SpanLabel nomprod = new SpanLabel("Produit : "+p.getNom());
        SpanLabel user = new SpanLabel("Pour : "+u.getNom()+" "+u.getPrenom());

        update.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new AffectLivreurForm(res, l.getId()).show();
            }
        });
        
        this.addAll(type, nomprod, user, update);
        
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new LivraisonForm(res).showBack();
        });
        
//        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
//            ls.deleteLivraison(l.getId());
//            new LivraisonForm(res).showBack();
//
//        });
    }
}
