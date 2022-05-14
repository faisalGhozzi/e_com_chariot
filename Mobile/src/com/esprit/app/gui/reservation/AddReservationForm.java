/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.reservation;

import com.codename1.capture.Capture;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.MultiButton;
import com.codename1.io.MultipartRequest;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.GenericListCellRenderer;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Categorie;
import com.esprit.app.entity.Reservation;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.categorie.CategorieForm;
import com.esprit.app.gui.reservation.ReservationForm;
import com.esprit.app.gui.salle.SalleDetailsForm;
import com.esprit.app.services.CategorieService;
import com.esprit.app.services.ReservationService;
import com.esprit.app.services.SalleService;
import com.esprit.app.utils.ConnectedUser;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class AddReservationForm extends BaseForm{
    
    @SuppressWarnings("unused")
    private Reservation r = new Reservation();
    private ReservationService rs = new ReservationService();
    private SalleService ss = new SalleService();
    
    
    public AddReservationForm(Resources res, int salle_id, int reservation_id){
        super(reservation_id == 0 ? "Add Reservation" : "Update Reservation",BoxLayout.y());
        if (reservation_id != 0){
            r = rs.getReservation(reservation_id);
            System.out.println(r);
        }     
        
        Button add = new Button(reservation_id == 0 ? "Create": "Update");

        TextField nombrePers = new TextField(reservation_id == 0 ? "" : String.valueOf(r.getNbp()), "Nombre personnes", 2, TextField.NUMERIC);
        Picker datePicker = new Picker();
        datePicker.setType(Display.PICKER_TYPE_DATE);
        datePicker.setDate(reservation_id == 0 ? new Date() : r.getDate());
        
        List<Categorie> categories = new CategorieService().getAllCategories();
        List<Map<String, Object>> entries = new ArrayList<>();
        for(Categorie categorie : categories){
            Map<String, Object> entry = new HashMap<>();
            entry.put(String.valueOf(categorie.getId()), categorie.getNom());
            entry.put("Line2", categorie.getNom());
            entries.add(entry);
        }
        ComboBox<Map<String, Object>> cb_category = new ComboBox<>(entries.toArray()); 
        cb_category.setRenderer(new GenericListCellRenderer<>(new MultiButton(), new MultiButton()));


        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                String selected = cb_category.getSelectedItem().entrySet().toArray()[0].toString();
                int category_id = Integer.valueOf(selected.substring(0, selected.indexOf("=")));
                Reservation r = new Reservation(datePicker.getDate(), Integer.parseInt(nombrePers.getText()), salle_id, ConnectedUser.getConnectedUser().getId());
                if ( reservation_id == 0 ){
                    rs.addReservation(r);
                }else{
                    r.setId(reservation_id);
                    rs.updateReservation(r);
                }             
                new ReservationForm(res, ConnectedUser.getConnectedUser().getId(), true).showBack();
            }
        });
        
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            if(reservation_id == 0){
                new SalleDetailsForm(res, ss.getSalle(salle_id)).showBack();
            }else{
                new ReservationForm(res, ConnectedUser.getConnectedUser().getId(), true).showBack();
            } 
        });
        addAll(nombrePers, datePicker, add);     
    }
}