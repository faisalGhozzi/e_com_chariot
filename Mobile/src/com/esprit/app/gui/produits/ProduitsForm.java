/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.produits;

import com.codename1.components.ImageViewer;
import com.codename1.components.MultiButton;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;

import com.esprit.app.entity.Produit;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.categorie.CategorieForm;
import com.esprit.app.services.ProduitService;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;

public class ProduitsForm extends BaseForm{
    private Resources theme;
    private ProduitService as = new ProduitService();
    private ArrayList<Produit> produits;
    
    public ProduitsForm(Resources res, int id){
        super("Produits", GridLayout.autoFit());
        this.theme = theme;
        produits = as.getAllProduits(id);
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Produit produit : produits) {
            MultiButton mb = new MultiButton(produit.getNom());
            EncodedImage placeholder = EncodedImage.createFromImage(Image.createImage(50, 50, 0xffff0000), true);
            Image i = URLImage.createToStorage(placeholder, produit.getImage() != null ? Statics.BASE_URL+"/uploads/produits/"+produit.getImage() : Statics.BASE_URL+"/uploads/produits/no_image.png", produit.getImage() != null ? Statics.BASE_URL+"/uploads/produits/"+produit.getImage() : Statics.BASE_URL+"/uploads/produits/no_image.png");
            mb.setIcon(i.fill(200, 200));
            mb.setTextLine2(String.valueOf(produit.getPrix())+" €");
            mb.addActionListener((evt) -> {
                new ProduitsDetailsForm(res, produit, id).show();
            });
            list.add(mb);
        }
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new CategorieForm(res).showBack();
        });
        this.add(list);   
    }
}
