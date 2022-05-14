/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.livraison;

import com.codename1.components.MultiButton;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Display;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.GenericListCellRenderer;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Adresse;
import com.esprit.app.entity.Livraison;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.livraison.LivraisonForm;
import com.esprit.app.services.AdresseService;
import com.esprit.app.services.LivraisonService;
import com.esprit.app.utils.ConnectedUser;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class AddLivraisonForm extends BaseForm{
    
    @SuppressWarnings("unused")
    private Livraison l = new Livraison();
    private LivraisonService ls = new LivraisonService();
    private AdresseService as = new AdresseService();
    
    
    public AddLivraisonForm(Resources res, List<List<Integer>> array, int id){
        super(id == 0 ? "Add Livraison" : "Update Livraison",BoxLayout.y());
        if (id != 0){
            //l = ls.getLivraison(id);
        }
        Button add = new Button(id == 0 ? "Confirm": "Update");
        Picker typePicker = new Picker();
        typePicker.setType(Display.PICKER_TYPE_STRINGS);
        typePicker.setStrings("Normal", "Rapide");
        typePicker.setSelectedString("Normal");
        List<Adresse> adresses = as.getAllAdresses(ConnectedUser.getConnectedUser().getId());
        List<Map<String, Object>> entries = new ArrayList<>();
        for(Adresse adresse : adresses){
            Map<String, Object> entry = new HashMap<>();
            entry.put(String.valueOf(adresse.getId()), adresse.getVille());
            entry.put("Line2", adresse.getRue()+", "+String.valueOf(adresse.getNumMaison()));
            entries.add(entry);
        }
        ComboBox<Map<String, Object>> cb_adresse = new ComboBox<>(entries.toArray()); 
        cb_adresse.setRenderer(new GenericListCellRenderer<>(new MultiButton(), new MultiButton()));

        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                String selected = cb_adresse.getSelectedItem().entrySet().toArray()[0].toString();
                int adresse_id = Integer.valueOf(selected.substring(0, selected.indexOf("=")));
                Livraison l = new Livraison();
                l.setAdresse(adresse_id);
                l.setType(typePicker.getSelectedString());
                if ( id == 0 ){
                    for (List<Integer> object : array) {
                        for (int i = 0; i < object.get(1); i++) {
                            System.out.println(object.get(0));
                            l.setProduit(object.get(0));
                            ls.addLivraison(l);
                        }
                    }
                }else{
                    l.setId(id);
                    //ls.updateLivraison(l);
                }             
                new HomeForm(res).showBack();
            }
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new HomeForm(res).showBack();
        });
        addAll(typePicker, cb_adresse, add);     
    }
}
