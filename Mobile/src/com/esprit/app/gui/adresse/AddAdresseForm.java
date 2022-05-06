/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.adresse;

import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Adresse;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.services.AdresseService;

public class AddAdresseForm extends Form{
    
    @SuppressWarnings("unused")
    private Resources theme;
    private Adresse a = new Adresse();
    private AdresseService as = new AdresseService();
    
    
    public AddAdresseForm(Form previous, Resources theme, int id){
        super(id == 0 ? "Add Adresse" : "Update Adresse",BoxLayout.y());
        if (id != 0){
            a = as.getAdresse(id);
        }     
        Button add = new Button(id == 0 ? "Create": "Update");
        TextField ville = new TextField(id == 0 ? "" : a.getVille(), "Ville");
        TextField rue = new TextField(id == 0 ? "" : a.getRue(), "Rue");
        TextField num = new TextField(id == 0 ? "" : String.valueOf(a.getNumMaison()), "Numero maison");


        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Adresse a = new Adresse(ville.getText(), rue.getText(), Integer.parseInt(num.getText()), 1);
                if ( id == 0 ){
                    as.addAdresse(a);
                }else{
                    a.setId(id);
                    as.updateAdresse(a);
                }             
                previous.show();
            }
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.show();
        });
        addAll(ville, rue, num, add);
    }
}

