package com.esprit.app.gui;

import java.io.IOException;

import com.codename1.ui.*;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.Layout;
import com.codename1.ui.util.Resources;
import com.esprit.app.gui.adresse.AdresseForm;
import com.esprit.app.gui.article.ArticleForm;
import com.esprit.app.gui.categorie.CategorieForm;
import com.esprit.app.gui.salle.SalleForm;
import com.esprit.app.gui.user.UserForm;

public abstract class SideMenu extends Form {
    public SideMenu(String title, Layout contentPaneLayout) {
        super(title, contentPaneLayout);
    }

    public SideMenu(String title) {
        super(title);
    }

    public SideMenu() {
    }

    public SideMenu(Layout contentPaneLayout) {
        super(contentPaneLayout);
    }

    public void setupSideMenu(Resources res) {
        Image profilePic = res.getImage("user.png");
       // Image mask = res.getImage("round-mask.png");
       // mask = mask.scaledHeight(mask.getHeight() / 4 * 3);
        //profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
        Label profilePicLabel = new Label("Hello User", profilePic, "SideMenuTitle");
       // profilePicLabel.setMask(mask.createMask());

        Container sidemenuTop = BorderLayout.center(profilePicLabel);
        /*Label u = new Label("Hello User");
        sidemenuTop.add(BorderLayout.CENTER, u);*/
        
        sidemenuTop.setUIID("SidemenuTop");


        
        getToolbar().addComponentToSideMenu(sidemenuTop);
    
        getToolbar().addCommandToSideMenu("  Users", null, e -> {
            try {
                new UserForm(this, res).show();
            } catch (IOException ex) {
                ex.printStackTrace();
            }
        });
        
        getToolbar().addCommandToSideMenu("  Articles", null, e -> {
            try {
                new ArticleForm(this, res).show();
            } catch (IOException ex) {
                ex.printStackTrace();
            }
        });
        
        getToolbar().addCommandToSideMenu("  Adresses", null, e -> {
            try {
                new AdresseForm(this, res).show();
            } catch (IOException ex) {
                ex.printStackTrace();
            }
        });
        
        getToolbar().addCommandToSideMenu("  Categories", null, e -> {
            try {
                new CategorieForm(this, res).show();
            } catch (IOException ex) {
                ex.printStackTrace();
            }
        });
        
        getToolbar().addCommandToSideMenu("  Salles", null, e -> {
            try {
                new SalleForm(this, res).show();
            } catch (IOException ex) {
                ex.printStackTrace();
            }
        });
    }

    protected abstract void showOtherForm(Resources res);
}
