/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.reservation;

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


import com.esprit.app.entity.Reservation;
import com.esprit.app.entity.Salle;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.user.UserDetailsForm;
import com.esprit.app.services.ReservationService;
import com.esprit.app.services.SalleService;
import com.esprit.app.utils.ConnectedUser;

import com.esprit.app.utils.Statics;
import java.text.SimpleDateFormat;

public class ReservationDetails extends BaseForm{
    @SuppressWarnings("unused")
    private ReservationService rs = new ReservationService();
    private SalleService ss = new SalleService();
     
    public ReservationDetails(Resources res,Reservation r){
        super("Reservation Details",BoxLayout.y());
        Button update = new Button("Update");
        Salle s = ss.getSalle(r.getSalle());
        int salle_id = s.getId();
        EncodedImage enc = EncodedImage.createFromImage(Image.createImage(Display.getInstance().getDisplayWidth(),Display.getInstance().getDisplayHeight()/3), true);
        String url = Statics.BASE_URL+"/uploads/salles/"+s.getImage();
        ImageViewer img = new ImageViewer(URLImage.createToStorage(enc, url, url));
        img.getAllStyles().setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL); 
        
        
        SpanLabel nom = new SpanLabel("Nom : "+s.getNom());
        SpanLabel nb_inv = new SpanLabel("Nombre d'invités : "+String.valueOf(r.getNbp()+"/"+s.getCapacite()));
        SpanLabel prix = new SpanLabel("Prix : "+String.valueOf(s.getPrix()+" €"));
        SpanLabel date = new SpanLabel("Date : "+new SimpleDateFormat("MM/dd/yyyy").format(r.getDate()));

        update.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new AddReservationForm(res, s.getId(), r.getId()).show();
            }
        });
        
        this.addAll(img, nom, nb_inv, prix, date, update);
        
        
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new ReservationForm(res, ConnectedUser.getConnectedUser().getId(), true).showBack();
        });
        
        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
            rs.deleteReservation(r.getId());
            new ReservationForm(res, ConnectedUser.getConnectedUser().getId(), true).showBack();
        });
    }
}
