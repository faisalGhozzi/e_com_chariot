/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.produits;

import com.codename1.components.FloatingActionButton;
import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;

import com.esprit.app.services.ProduitService;
import com.esprit.app.entity.Produit;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.reservation.ReservationForm;
import com.esprit.app.services.CartService;
import com.esprit.app.utils.Statics;
import java.io.IOException;



public class ProduitsDetailsForm extends BaseForm{
    @SuppressWarnings("unused")
    private Resources theme;
    private ProduitService ps = new ProduitService();
    private CartService cs = new CartService();
    
    
    public ProduitsDetailsForm(Resources res,Produit p, int categ){
        super("Produit Details",BoxLayout.y());
        Button update = new Button("Update");
        Button liste_reservation = new Button("Consulter liste d'attente");
        EncodedImage enc = EncodedImage.createFromImage(Image.createImage(Display.getInstance().getDisplayWidth(),Display.getInstance().getDisplayHeight()/3), true);
        String url = Statics.BASE_URL+"/uploads/produits/"+p.getImage();
        ImageViewer img = new ImageViewer(URLImage.createToStorage(enc, url, url));
        img.getAllStyles().setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        
        FloatingActionButton fab = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
        fab.createSubFAB(FontImage.MATERIAL_ADD_SHOPPING_CART, "").addActionListener((evt) -> {
            cs.addCart(p);
        });
        
        
        SpanLabel nom = new SpanLabel("Nom : "+p.getNom());
        SpanLabel prix = new SpanLabel("Prix : "+String.valueOf(p.getPrix())+" €");
        SpanLabel quantite = new SpanLabel("Capacité : "+String.valueOf(p.getQuantite()));
        SpanLabel description = new SpanLabel("Description : "+p.getDescription());

        update.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new AddProduitsForm(res, p.getId()).show();
            }
        });
        
//        liste_reservation.addActionListener(new ActionListener() {
//            @Override
//            public void actionPerformed(ActionEvent evt) {
//                try {
//                    new ReservationForm(previous, theme, p.getId(), false).show();
//                } catch (IOException ex) {
//                    ex.printStackTrace();
//                }
//            }
//        }); 
        
        this.addAll(img, nom, prix, quantite, description, update);
        
        fab.bindFabToContainer(this);

        


        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new ProduitsForm(res, categ).showBack();
        });
        
        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
            ps.deleteProduit(p.getId());
            //previous.show();
        });
    }
}