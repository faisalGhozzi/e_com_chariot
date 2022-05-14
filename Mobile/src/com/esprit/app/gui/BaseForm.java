/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui;

import com.codename1.components.ScaleImageLabel;
import com.codename1.ui.Component;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.layouts.Layout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.esprit.app.gui.article.ArticleForm;
import com.esprit.app.gui.cart.CartForm;
import com.esprit.app.gui.categorie.CategorieForm;
import com.esprit.app.gui.livraison.LivraisonForm;
import com.esprit.app.gui.livreur.LivreurForm;
import com.esprit.app.gui.salle.SalleForm;
import com.esprit.app.gui.user.UserDetailsForm;
import com.esprit.app.gui.user.UserForm;
import com.esprit.app.utils.ConnectedUser;
import java.io.IOException;

/**
 * Base class for the forms with common functionality
 *
 * @author Shai Almog
 */
public class BaseForm extends Form {

    public BaseForm() {
    }

    public BaseForm(Layout contentPaneLayout) {
        super(contentPaneLayout);
    }

    public BaseForm(String title, Layout contentPaneLayout) {
        super(title, contentPaneLayout);
    }
   
   
    public Component createLineSeparator() {
        Label separator = new Label("", "WhiteSeparator");
        separator.setShowEvenIfBlank(true);
        return separator;
    }
   
    public Component createLineSeparator(int color) {
        Label separator = new Label("", "WhiteSeparator");
        separator.getUnselectedStyle().setBgColor(color);
        separator.getUnselectedStyle().setBgTransparency(255);
        separator.setShowEvenIfBlank(true);
        return separator;
    }

    protected void addSideMenu(Resources res) {
        Toolbar tb = getToolbar();
        Image img = res.getImage("profile-background.jpg");
        if(img.getHeight() > Display.getInstance().getDisplayHeight() / 3) {
            img = img.scaledHeight(Display.getInstance().getDisplayHeight() / 3);
        }
        ScaleImageLabel sl = new ScaleImageLabel(img);
        sl.setUIID("BottomPad");
        sl.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
       
        tb.addComponentToSideMenu(LayeredLayout.encloseIn(
                sl,
                FlowLayout.encloseCenterBottom(
                        new Label(res.getImage("profile-pic.jpg"), "PictureWhiteBackgrond"))
        ));
       
        tb.addMaterialCommandToSideMenu(" Profile", FontImage.MATERIAL_PERSON, e -> new UserDetailsForm(res, ConnectedUser.getConnectedUser()).show());
        tb.addMaterialCommandToSideMenu(" Users", FontImage.MATERIAL_PEOPLE, e ->{ new UserForm(res).show();});
        tb.addMaterialCommandToSideMenu(" Articles", FontImage.MATERIAL_ARTICLE, e -> new ArticleForm(res).show());
        tb.addMaterialCommandToSideMenu(" Categories", FontImage.MATERIAL_CATEGORY, e -> new CategorieForm(res).show());
        tb.addMaterialCommandToSideMenu(" Salles", FontImage.MATERIAL_APARTMENT, e -> new SalleForm(res).show());
        tb.addMaterialCommandToSideMenu(" Livreurs", FontImage.MATERIAL_PERSON_ADD, e -> new LivreurForm(res).show());
        tb.addMaterialCommandToSideMenu(" Livraison", FontImage.MATERIAL_TRAIN, e -> new LivraisonForm(res).show());

        

        tb.addMaterialCommandToSideMenu("Panier", FontImage.MATERIAL_SHOPPING_CART, e -> {
            try {
                new CartForm(res).show();
            } catch (IOException ex) {
                ex.printStackTrace();
            }
        });

        tb.addMaterialCommandToSideMenu("Logout", FontImage.MATERIAL_EXIT_TO_APP, e -> new SignInForm(res).show());
    }
}
