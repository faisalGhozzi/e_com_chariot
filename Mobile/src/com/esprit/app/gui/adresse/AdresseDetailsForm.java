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
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.adresse.AddAdresseForm;
import com.esprit.app.services.AdresseService;
import com.esprit.app.utils.ConnectedUser;

public class AdresseDetailsForm extends BaseForm{
    @SuppressWarnings("unused")
    private AdresseService as = new AdresseService();
    
    
    public AdresseDetailsForm(Resources res, Adresse a){
        super("Adresse Details",BoxLayout.y());
        Button update = new Button("Update");
        
        SpanLabel ville = new SpanLabel("Ville : "+a.getVille());
        SpanLabel rue = new SpanLabel("Rue : "+a.getRue());
        SpanLabel num = new SpanLabel("Numero maison : "+String.valueOf(a.getNumMaison()));

        update.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new AddAdresseForm(res, a.getId()).show();
            }
        });
        
        this.addAll(ville, rue, num, update);
        
        


        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new AdresseForm(res, ConnectedUser.getConnectedUser().getId()).showBack();
        });
        
        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
            as.deleteAdresse(a.getId());
            new AdresseForm(res, ConnectedUser.getConnectedUser().getId()).showBack();

        });
    }
}
