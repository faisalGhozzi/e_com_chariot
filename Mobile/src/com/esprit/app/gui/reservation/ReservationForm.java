/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.reservation;

import com.codename1.components.MultiButton;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Reservation;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.salle.SalleDetailsForm;
import com.esprit.app.gui.user.UserDetailsForm;
import com.esprit.app.services.ReservationService;
import com.esprit.app.services.SalleService;
import com.esprit.app.utils.ConnectedUser;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;


public class ReservationForm extends BaseForm{
    private Resources theme;
    private ReservationService rs = new ReservationService();
    private SalleService ss = new SalleService();
    private ArrayList<Reservation> reservations;
    
    public ReservationForm(Resources res, int id, boolean user ){
        super(user == true ? "Mes Reservations" : "Reservations prises", GridLayout.autoFit());
        this.theme = theme;
        reservations = user ? rs.getReservationsParUser(id) : rs.getReservationsParSalle(id);
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Reservation reservation : reservations) {
            MultiButton mb = new MultiButton(String.valueOf(reservation.getDate()));
            mb.setTextLine2("Salle résérvé pour "+reservation.getNbp()+" personnes");
            if(user){
                mb.addActionListener((evt) -> {
                    new ReservationDetails(res, reservation).show();
                });
            }
            list.add(mb);
        }
//        this.getToolbar().addCommandToRightBar("Add", null, (evt) -> {
//            new AddReservationForm(this, theme, 0).show();
//        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            if(user){
                new UserDetailsForm(res, ConnectedUser.getConnectedUser()).showBack();
            }else{
                new SalleDetailsForm(res, ss.getSalle(id)).showBack();
            }
        });
        this.add(list);   
    }
}
