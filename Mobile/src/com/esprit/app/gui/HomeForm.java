package com.esprit.app.gui;
import com.codename1.components.FloatingActionButton;
import com.codename1.components.MultiButton;
import com.codename1.ui.*;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;

public class HomeForm extends BaseForm{

    public HomeForm(Resources res){
        super("Acceuil",BoxLayout.y());
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Acceuil");
        getContentPane().setScrollVisible(false);
        
        super.addSideMenu(res);
        tb.addSearchCommand(e -> {});

//        tb.setTitleCentered(false);
//        Image profilePic = res.getImage("user-picture.png");
//        Image mask = res.getImage("round-mask.png");
//        profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
//        Label profilePicLabel = new Label(profilePic, "ProfilePicTitle");
//        profilePicLabel.setMask(mask.createMask());
//
//        Button menuButton = new Button("");
//        menuButton.setUIID("Title");
//        FontImage.setMaterialIcon(menuButton, FontImage.MATERIAL_MENU);
//        menuButton.addActionListener(e -> getToolbar().openSideMenu());
//
//        Container titleCmp = BoxLayout.encloseY(
//                FlowLayout.encloseIn(menuButton),
//                BorderLayout.centerAbsolute(
//                        BoxLayout.encloseY(
//                                new Label("", "Title"),
//                                new Label("", "SubTitle")
//                        )
//                ).add(BorderLayout.WEST, profilePicLabel)
//        );
//        tb.setTitleComponent(titleCmp);
//        setupSideMenu(res);
    }
}
