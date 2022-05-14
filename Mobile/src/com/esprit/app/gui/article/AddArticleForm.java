/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.article;

import com.codename1.capture.Capture;
import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.io.MultipartRequest;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.Dialog;
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
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.services.ArticleService;
import com.esprit.app.utils.ConnectedUser;
import com.esprit.app.utils.Statics;
import java.io.IOException;

public class AddArticleForm extends BaseForm{
    
    @SuppressWarnings("unused")
    private Resources theme;
    private Article a = new Article();
    private ArticleService as = new ArticleService();
    
    
    public AddArticleForm(Resources res, int id){
        super(id == 0 ? "Add Article" : "Update Article",BoxLayout.y());
        if (id != 0){
            a = as.getArticle(id);
        }     
        
        int nbreacts = id == 0 ? 0 : a.getNbrreact();
        
        Label imgName = new Label(id == 0 ? "" : a.getImage());
        Label lbl_Image = new Label();
        
        Button add = new Button(id == 0 ? "Create": "Update");
        Button uploadImage = new Button("Upload Image");
        
        TextField titre = new TextField(id == 0 ? "" : a.getTitre(), "Titre");
        TextField contenu = new TextField(id == 0 ? "" : a.getContenu(), "Contenu");

        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Article a = new Article(contenu.getText(), titre.getText(), imgName.getText(), nbreacts, ConnectedUser.getConnectedUser().getId());
                if ( id == 0 ){
                    as.addArticle(a);
                }else{
                    a.setId(id);
                    as.updateArticle(a);
                }             
                new ArticleForm(res).showBack();
            }
        });
        
        uploadImage.addActionListener((evt) -> {
            MultipartRequest cr = new MultipartRequest();

            String filePath = Capture.capturePhoto(Display.getInstance().getDisplayWidth(), -1);
            String filename = filePath.substring(filePath.lastIndexOf("/") + 1, filePath.indexOf("."));
            String ext = filePath.substring(filePath.lastIndexOf("."), filePath.length());
            imgName.setText(filename + "" + ext);
            
            a.setImage(imgName.getText());
           
            cr.setUrl(Statics.BASE_URL + "/article/json/upload");
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
            new ArticleForm(res).showBack();
        });
        addAll(lbl_Image, titre, contenu, uploadImage, add);     
    }
}
