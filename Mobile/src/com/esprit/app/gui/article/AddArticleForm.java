/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.article;

import com.codename1.capture.Capture;
import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Article;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.services.ArticleService;
import com.esprit.app.utils.Statics;
import java.io.IOException;

public class AddArticleForm extends Form{
    
    @SuppressWarnings("unused")
    private Resources theme;
    private Article a = new Article();
    private ArticleService as = new ArticleService();
    
    
    public AddArticleForm(Form previous, Resources theme, int id){
        super(id == 0 ? "Add Article" : "Update Article",BoxLayout.y());
        if (id != 0){
            a = as.getArticle(id);
        }     
        
        Label imgName = new Label();
        Label lbl_Image = new Label();
        
        Button add = new Button(id == 0 ? "Create": "Update");
        Button uploadImage = new Button("Upload Image");
        
        TextField titre = new TextField(id == 0 ? "" : a.getTitre(), "Titre");
        TextField contenu = new TextField(id == 0 ? "" : a.getContenu(), "Contenu");
        TextField etat = new TextField(id == 0 ? "" : a.getEtat(), "Etat");

        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Article a = new Article(contenu.getText(), titre.getText(), etat.getText(), "no_image.png", 0, 1);
                if ( id == 0 ){
                    as.addArticle(a);
                }else{
                    a.setId(id);
                    as.updateArticle(a);
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
        addAll(lbl_Image, titre, contenu, etat, uploadImage, add);     
    }
}
