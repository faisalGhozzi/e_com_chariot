/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.article;

import com.codename1.components.ImageViewer;
import com.codename1.components.ShareButton;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Article;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.commentaires.CommentaireForm;
import com.esprit.app.services.ArticleService;
import com.esprit.app.utils.Statics;

public class ArticleDetailsForm extends BaseForm{
    @SuppressWarnings("unused")
    private Resources theme;
    private ArticleService as = new ArticleService();
    
    
    public ArticleDetailsForm(Resources res,Article a){
        super("Article Details",BoxLayout.y());
        Button update = new Button("Update");
        Button comments = new Button("Commentaires");
        ShareButton shareButton = new ShareButton();
        shareButton.setText("Partager");
        EncodedImage enc = EncodedImage.createFromImage(Image.createImage(Display.getInstance().getDisplayWidth(),Display.getInstance().getDisplayHeight()/3), true);
        String url = Statics.BASE_URL+"/uploads/articles/"+a.getImage();
        ImageViewer img = new ImageViewer(URLImage.createToStorage(enc, url, url));
        img.getAllStyles().setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        
        shareButton.setTextToShare(a.toString());
        
        SpanLabel titre = new SpanLabel("Nom : "+a.getTitre());
        SpanLabel contenu = new SpanLabel("Contenu : "+String.valueOf(a.getContenu()));
        SpanLabel nbreact = new SpanLabel("Nombre Reacts : "+String.valueOf(a.getNbrreact()));

        update.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new AddArticleForm(res, a.getId()).show();
            }
        });
        
        comments.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new CommentaireForm(res, a.getId()).show();
            }
        });
        
        this.addAll(img, titre, contenu, nbreact, comments, update, shareButton);
        
        


        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new ArticleForm(res).showBack();
        });
        
        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
            as.deleteArticle(a.getId());
            new ArticleForm(res).showBack();
        });
    }
}
