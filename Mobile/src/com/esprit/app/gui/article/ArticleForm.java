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
import com.esprit.app.services.ArticleService;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;

public class ArticleForm extends Form{
    private Resources theme;
    private ArticleService as = new ArticleService();
    private ArrayList<Article> articles;
    
    public ArticleForm(Form previous, Resources res)throws IOException{
        super("My Articles", GridLayout.autoFit());
        this.theme = theme;
        this.revalidate();
        articles = as.getAllArticles();
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Article article : articles) {
            MultiButton mb = new MultiButton(article.getTitre());
            EncodedImage placeholder = EncodedImage.createFromImage(Image.createImage(50, 50, 0xffff0000), true);
            Image i = URLImage.createToStorage(placeholder, article.getImage() != null ? Statics.BASE_URL+"/uploads/articles/"+article.getImage() : Statics.BASE_URL+"/uploads/articles/no_image.png", article.getImage() != null ? Statics.BASE_URL+"/uploads/articles/"+article.getImage() : Statics.BASE_URL+"/uploads/articles/no_image.png");
            mb.setIcon(i.fill(200, 200));
            mb.setTextLine2("Author");
            mb.addActionListener((evt) -> {
                new ArticleDetailsForm(this, theme, article).show();
            });
            list.add(mb);
        }
        this.getToolbar().addCommandToRightBar("Add", null, (evt) -> {
            new AddArticleForm(this, theme, 0).show();
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.show();
        });
        this.add(list);   
    }
}
