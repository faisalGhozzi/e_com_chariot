/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.salle;

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


import com.esprit.app.entity.Salle;
import com.esprit.app.services.SalleService;
import com.esprit.app.utils.Statics;

public class SalleDetailsForm extends Form{
    @SuppressWarnings("unused")
    private Resources theme;
    private SalleService ss = new SalleService();
    
    
    public SalleDetailsForm(Form previous,Resources theme,Salle s){
        super("Salle Details",BoxLayout.y());
        Button update = new Button("Update");
        EncodedImage enc = EncodedImage.createFromImage(Image.createImage(Display.getInstance().getDisplayWidth(),Display.getInstance().getDisplayHeight()/3), true);
        String url = Statics.BASE_URL+"/uploads/salles/"+s.getImage();
        ImageViewer img = new ImageViewer(URLImage.createToStorage(enc, url, url));
        img.getAllStyles().setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        
        
        SpanLabel nom = new SpanLabel("Nom : "+s.getNom());
        SpanLabel prix = new SpanLabel("Prix : "+String.valueOf(s.getPrix())+" €");
        SpanLabel capacite = new SpanLabel("Capacité : "+String.valueOf(s.getCapacite()));

        update.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new AddSalleForm(previous, theme, s.getId()).show();
            }
        });
        
        this.addAll(img, nom, prix, capacite, update);
        
        


        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.showBack();
        });
        
        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
            ss.deleteSalle(s.getId());
            previous.showBack();
        });
    }
}
