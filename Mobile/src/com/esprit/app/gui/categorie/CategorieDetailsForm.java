/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.categorie;

import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Categorie;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.categorie.AddCategorieForm;
import com.esprit.app.services.CategorieService;
import com.esprit.app.utils.Statics;

public class CategorieDetailsForm extends Form{
    @SuppressWarnings("unused")
    private Resources theme;
    private CategorieService cs = new CategorieService();
    
    
    public CategorieDetailsForm(Form previous,Resources theme,Categorie c){
        super("Categorie Details",BoxLayout.y());
        Button update = new Button("Update");
        
        SpanLabel nom = new SpanLabel("Nom : "+c.getNom());
        SpanLabel description = new SpanLabel("Description : "+c.getDescription());

        update.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new AddCategorieForm(previous, theme, c.getId()).show();
            }
        });
        
        this.addAll(nom, description, update);
        
        


        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.show();
        });
        
        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
            cs.deleteCategorie(c.getId());
            previous.show();
        });
    }
}