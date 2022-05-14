/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.commentaires;

import com.codename1.components.MultiButton;
import com.codename1.ui.Container;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Commentaire;
import com.esprit.app.entity.User;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.article.ArticleForm;
import com.esprit.app.gui.commentaires.AddCommentaireForm;
import com.esprit.app.gui.commentaires.CommentaireDetailForm;
import com.esprit.app.services.CommentairesService;
import com.esprit.app.services.UserService;
import com.esprit.app.utils.ConnectedUser;
import java.util.ArrayList;

public class CommentaireForm extends BaseForm{
    CommentairesService commentaireService = new CommentairesService();
    UserService userService = new UserService();
    public ArrayList<Commentaire> commentaires;
    @SuppressWarnings("unused")
    private Resources theme;
    
    public CommentaireForm(Resources res, int article_id){
        super("Commentaires", GridLayout.autoFit());
        this.theme = theme;
        
        commentaires = commentaireService.getAllCommentaires();
        System.out.println(commentaires);
        Container list = new Container(BoxLayout.y());
        list.setScrollableY(true);
        for (Commentaire commentaire : commentaires) {
            if(commentaire.getArticle() == article_id){
                User u = userService.getUser(commentaire.getUser());
                MultiButton mb = new MultiButton(u.getNom()+" "+u.getPrenom());
                mb.setTextLine2(commentaire.getContenu());
                mb.addActionListener((evt) -> {
                    new CommentaireDetailForm(res, commentaire).show();
                });
                
                if(u.getId() == ConnectedUser.getConnectedUser().getId()){
                    mb.addLongPressListener((evt) -> {
                        commentaireService.deleteCommentaire(commentaire.getId());
                        new CommentaireForm(res, article_id).show();
                    });
                }
                
                list.add(mb);
            }
            
        }
        
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new ArticleForm(res).showBack();
        });
        
        this.getToolbar().addCommandToRightBar("add", null, (evt) -> {
            new AddCommentaireForm(res, article_id, 0).show();
        });
        this.add(list);
    }
}
