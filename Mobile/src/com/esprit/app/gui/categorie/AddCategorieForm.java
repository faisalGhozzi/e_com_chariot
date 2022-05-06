/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.categorie;

import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Categorie;
import com.esprit.app.services.CategorieService;

public class AddCategorieForm extends Form{
    
    @SuppressWarnings("unused")
    private Resources theme;
    private Categorie c = new Categorie();
    private CategorieService cs = new CategorieService();
    
    
    public AddCategorieForm(Form previous, Resources theme, int id){
        super(id == 0 ? "Add Categorie" : "Update Categorie",BoxLayout.y());
        if (id != 0){
            c = cs.getCategorie(id);
        }     
        Button add = new Button(id == 0 ? "Create": "Update");
        TextField nom = new TextField(id == 0 ? "" : c.getNom(), "Nom");
        TextField description = new TextField(id == 0 ? "" : c.getDescription(), "Description");

        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Categorie c = new Categorie(nom.getText(), description.getText());
                if ( id == 0 ){
                    cs.addCategorie(c);
                }else{
                    c.setId(id);
                    cs.updateCategorie(c);
                }             
                previous.showBack();
            }
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.showBack();
        });
        addAll(nom, description, add);     
    }
}
