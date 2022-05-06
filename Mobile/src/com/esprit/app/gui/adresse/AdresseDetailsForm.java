/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.adresse;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Adresse;
import com.esprit.app.gui.adresse.AddAdresseForm;
import com.esprit.app.services.AdresseService;

public class AdresseDetailsForm extends Form{
    @SuppressWarnings("unused")
    private Resources theme;
    private AdresseService as = new AdresseService();
    
    
    public AdresseDetailsForm(Form previous,Resources theme,Adresse a){
        super("Adresse Details",BoxLayout.y());
        Button update = new Button("Update");
        
        SpanLabel ville = new SpanLabel("Ville : "+a.getVille());
        SpanLabel rue = new SpanLabel("Rue : "+a.getRue());
        SpanLabel num = new SpanLabel("Numero maison : "+String.valueOf(a.getNumMaison()));

        update.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new AddAdresseForm(previous, theme, a.getId()).show();
            }
        });
        
        this.addAll(ville, rue, num, update);
        
        


        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.showBack();
        });
        
        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
            as.deleteAdresse(a.getId());
            previous.showBack();
        });
    }
}
