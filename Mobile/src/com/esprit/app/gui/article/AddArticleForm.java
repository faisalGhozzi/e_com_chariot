/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.article;

import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Article;
import com.esprit.app.services.ArticleService;

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
        Button add = new Button(id == 0 ? "Create": "Update");
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
                previous.showBack();
            }
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            previous.showBack();
        });
        addAll(titre, contenu, etat, add);     
    }
}
