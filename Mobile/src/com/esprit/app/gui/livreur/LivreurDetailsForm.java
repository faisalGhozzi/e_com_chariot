/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.livreur;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Livreur;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.livreur.AddLivreurForm;
import com.esprit.app.gui.livreur.LivreurForm;
import com.esprit.app.services.LivreurService;

public class LivreurDetailsForm extends BaseForm{
    @SuppressWarnings("unused")
    private Resources theme;
    private LivreurService ls = new LivreurService();
    
    
    public LivreurDetailsForm(Resources res,Livreur l){
        super("Livreur Details",BoxLayout.y());
        Button update = new Button("Update");
        
        SpanLabel nom = new SpanLabel("Nom : "+l.getNom());
        SpanLabel prenom = new SpanLabel("Prenom : "+l.getPrenom());
        SpanLabel email = new SpanLabel("E-mail : "+l.getEmail());
        SpanLabel num = new SpanLabel("Telephone : "+l.getTel());


        update.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new AddLivreurForm(res, l.getId()).show();
            }
        });
        
        this.addAll(nom, prenom, update);
        
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new LivreurForm(res).showBack();
        });
        
        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
            ls.deleteLivreur(l.getId());
            new LivreurForm(res).showBack();

        });
    }
}
