/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.salle;


import com.codename1.capture.Capture;
import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.SpanLabel;
import com.codename1.io.MultipartRequest;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.Dialog;
import com.codename1.ui.TextField;

import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.animations.CommonTransitions;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;


import com.esprit.app.entity.Salle;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.services.SalleService;
import com.esprit.app.utils.Statics;
import java.io.IOException;

public class AddSalleForm extends BaseForm{
    
    @SuppressWarnings("unused")
    private Resources theme;
    private Salle s = new Salle();
    private SalleService ss = new SalleService();
    
    
    public AddSalleForm(Resources res, int id){
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
                Salle s = new Salle(nom.getText(), Float.parseFloat(prix.getText()), imgName.getText() , Integer.parseInt(capacite.getText()));
                if ( id == 0 ){
                    ss.addSalle(s);
                }else{
                    s.setId(id);
                    ss.updateSalle(s);
                }             
                new SalleForm(res).showBack();
            }
        });
        
        
        uploadImage.addActionListener((evt) -> {
            MultipartRequest cr = new MultipartRequest();

            String filePath = Capture.capturePhoto(Display.getInstance().getDisplayWidth(), -1);
            String filename = filePath.substring(filePath.lastIndexOf("/") + 1, filePath.indexOf("."));
            String ext = filePath.substring(filePath.lastIndexOf("."), filePath.length());
            imgName.setText(filename + "" + ext);
            
            s.setImage(imgName.getText());
           
            cr.setUrl(Statics.BASE_URL + "/salles/json/upload");
            cr.setPost(true); 
            String mime = "image/*";
            try {
                cr.addData("file", filePath, mime);
            } catch (IOException ex) {
                Dialog.show("Error", ex.getMessage(), "OK", null);
            }

            cr.setFilename("file", filename.concat(ext));//any unique name you want

            InfiniteProgress prog = new InfiniteProgress();
            Dialog dlg = prog.showInifiniteBlocking();
            cr.setDisposeOnCompletion(dlg);
            NetworkManager.getInstance().addToQueueAndWait(cr);
            Dialog.show("Success", "Image uploaded", "OK", null);
            Image img;
            try {
                img = Image.createImage(filePath);
                lbl_Image.setIcon(img);
                this.revalidate();

            } catch (IOException ex) {
                ex.printStackTrace();
            }
                    
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new SalleForm(res).showBack();
        });
        addAll(lbl_Image, nom, prix, capacite, uploadImage, add);     
    }
    
    /*public void returnToPrec(Resources res) throws IOException{
        SalleForm h = new SalleForm(res);
        h.setF(h.createSalleForm(res));
        this.setTransitionOutAnimator(CommonTransitions.createEmpty());
        h.getF().show();
    }*/
}