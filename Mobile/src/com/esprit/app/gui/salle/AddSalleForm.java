/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.salle;


import com.codename1.capture.Capture;
import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.TextField;

import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;


import com.esprit.app.entity.Salle;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.services.SalleService;
import com.esprit.app.utils.Statics;
import java.io.IOException;


public class AddSalleForm extends Form{
    
    @SuppressWarnings("unused")
    private Resources theme;
    private Salle s = new Salle();
    private SalleService ss = new SalleService();
    
    
    public AddSalleForm(Form previous, Resources theme, int id){
        super(id == 0 ? "Add Salle" : "Update Salle",BoxLayout.y());
        if (id != 0){
            s = ss.getSalle(id);
        }     
        Label imgName = new Label();
        Label lbl_Image = new Label();
        
        Button add = new Button(id == 0 ? "Create": "Update");
        Button uploadImage = new Button("Upload Image");

        TextField nom = new TextField(id == 0 ? "" : s.getNom(), "Nom");
        TextField prix = new TextField(id == 0 ? "" : String.valueOf(s.getPrix()), "Prix");
        TextField capacite = new TextField(id == 0 ? "" : String.valueOf(s.getCapacite()), "Capacité");

        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Salle s = new Salle(nom.getText(), Float.parseFloat(prix.getText()), "no_image.png", Integer.parseInt(capacite.getText()));
                if ( id == 0 ){
                    ss.addSalle(s);
                }else{
                    s.setId(id);
                    ss.updateSalle(s);
                }             
            previous.show();
            }
        });
        
        uploadImage.addActionListener((evt) -> {
            String path = Capture.capturePhoto(Display.getInstance().getDisplayWidth(), -1);
            if(path != null){
                try {
                    Image img = Image.createImage(path);
                    lbl_Image.setIcon(img);
                    imgName.setText(path);
                    this.revalidate();
                } catch (IOException ex) {
                    ex.printStackTrace();
                }
                
            }
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.show();
        });
        addAll(lbl_Image, nom, prix, capacite, uploadImage, add);     
    }
}