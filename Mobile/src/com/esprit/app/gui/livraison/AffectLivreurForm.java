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
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.GenericListCellRenderer;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Adresse;
import com.esprit.app.entity.Livraison;
import com.esprit.app.entity.Livreur;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.services.AdresseService;
import com.esprit.app.services.LivraisonService;
import com.esprit.app.services.LivreurService;
import com.esprit.app.utils.ConnectedUser;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class AffectLivreurForm extends BaseForm{
    
    @SuppressWarnings("unused")
    private Livraison l = new Livraison();
    private LivraisonService ls = new LivraisonService();
    private LivreurService livs = new LivreurService();
    
    
    public AffectLivreurForm(Resources res, int id){
        super("Affecter Livreur",BoxLayout.y());
        Button add = new Button("Confirm");
        List<Livreur> livreurs = livs.getAllLivreurs();
        List<Map<String, Object>> entries = new ArrayList<>();
        for(Livreur livreur : livreurs){
            Map<String, Object> entry = new HashMap<>();
            entry.put(String.valueOf(livreur.getId()), livreur.getEmail());
            entry.put("Line2", livreur.getNom()+" "+livreur.getPrenom());
            entries.add(entry);
        }
        ComboBox<Map<String, Object>> cb_livreur = new ComboBox<>(entries.toArray()); 
        cb_livreur.setRenderer(new GenericListCellRenderer<>(new MultiButton(), new MultiButton()));

        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                String selected = cb_livreur.getSelectedItem().entrySet().toArray()[0].toString();
                int livreur_id = Integer.valueOf(selected.substring(0, selected.indexOf("=")));
                Livraison l = new Livraison();
                l.setLivreur(livreur_id);
                l.setId(id);
                ls.updateLivraison(l);             
                new QRFrom(res, l.toString()).showBack();
            }
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new HomeForm(res).showBack();
        });
        addAll(cb_livreur, add);     
    }
}
