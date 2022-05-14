/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.livreur;

import com.codename1.ui.Button;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Livreur;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.livreur.LivreurForm;
import com.esprit.app.services.LivreurService;

public class AddLivreurForm extends BaseForm{
    
    @SuppressWarnings("unused")
    private Livreur l = new Livreur();
    private LivreurService ls = new LivreurService();
    
    
    public AddLivreurForm(Resources res, int id){
        super(id == 0 ? "Add Livreur" : "Update Livreur",BoxLayout.y());
        if (id != 0){
            l = ls.getLivreur(id);
        }     
        Button add = new Button(id == 0 ? "Create": "Update");
        TextField nom = new TextField(id == 0 ? "" : l.getNom(), "Nom");
        TextField prenom = new TextField(id == 0 ? "" : l.getPrenom(), "Prenom");
        TextField email = new TextField(id == 0 ? "" : l.getEmail(), "E-mail", 50, TextField.EMAILADDR);
        TextField tel = new TextField(id == 0 ? "" : l.getTel(), "Telephone");


        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Livreur l = new Livreur(nom.getText(), prenom.getText(), tel.getText(), email.getText());
                if ( id == 0 ){
                    ls.addLivreur(l);
                }else{
                    l.setId(id);
                    ls.updateLivreur(l);
                }             
                new LivreurForm(res).showBack();
            }
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new LivreurForm(res).showBack();
        });
        addAll(nom, prenom, email, tel, add);     
    }
}
