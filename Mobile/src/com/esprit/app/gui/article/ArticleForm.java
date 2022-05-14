/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.article;

import com.codename1.components.MultiButton;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Article;
import com.esprit.app.entity.User;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.services.ArticleService;
import com.esprit.app.services.UserService;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;

public class ArticleForm extends BaseForm{
    private ArticleService as = new ArticleService();
    private ArrayList<Article> articles;
    private UserService us = new UserService();
    
    public ArticleForm(Resources res){
        super("My Articles", GridLayout.autoFit());
        this.revalidate();
        articles = as.getAllArticles();
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Article article : articles) {
            User u = us.getUser(article.getAuteur());
            MultiButton mb = new MultiButton(article.getTitre());
            EncodedImage placeholder = EncodedImage.createFromImage(Image.createImage(50, 50, 0xffff0000), true);
            Image i = URLImage.createToStorage(placeholder, article.getImage() != null ? Statics.BASE_URL+"/uploads/articles/"+article.getImage() : Statics.BASE_URL+"/uploads/articles/no_image.png", article.getImage() != null ? Statics.BASE_URL+"/uploads/articles/"+article.getImage() : Statics.BASE_URL+"/uploads/articles/no_image.png");
            mb.setIcon(i.fill(200, 200));
            mb.setTextLine2(u.getNom()+" "+u.getPrenom());
            mb.addActionListener((evt) -> {
                new ArticleDetailsForm(res, article).show();
            });
            list.add(mb);
        }
        this.getToolbar().addCommandToRightBar("Add", null, (evt) -> {
            new AddArticleForm(res, 0).show();
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new HomeForm(res).showBack();
        });
        this.add(list);   
    }
}
