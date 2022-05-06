/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.salle;

import com.codename1.components.MultiButton;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Salle;
import com.esprit.app.services.SalleService;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;


public class SalleForm extends Form{
    private Resources theme;
    private SalleService as = new SalleService();
    private ArrayList<Salle> salles;
    
    public SalleForm(Form previous, Resources res)throws IOException{
        super("My Salles", GridLayout.autoFit());
        this.theme = theme;
        this.revalidate();
        salles = as.getAllSalles();
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Salle salle : salles) {
            MultiButton mb = new MultiButton(salle.getNom());
            EncodedImage placeholder = EncodedImage.createFromImage(Image.createImage(50, 50, 0xffff0000), true);
            Image i = URLImage.createToStorage(placeholder, salle.getImage() != null ? Statics.BASE_URL+"/uploads/salles/"+salle.getImage() : Statics.BASE_URL+"/uploads/salles/no_image.png", salle.getImage() != null ? Statics.BASE_URL+"/uploads/salles/"+salle.getImage() : Statics.BASE_URL+"/uploads/salles/no_image.png");
            mb.setIcon(i.fill(200, 200));
            mb.setTextLine2(String.valueOf(salle.getCapacite())+" €");
            mb.addActionListener((evt) -> {
                // new SalleDetailsForm(this, theme, salle).show();
            });
            list.add(mb);
        }
        this.getToolbar().addCommandToRightBar("Add", null, (evt) -> {
            // new AddSalleForm(this, theme, 0, false).show();
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.show();
        });
        this.add(list);   
    }
}
