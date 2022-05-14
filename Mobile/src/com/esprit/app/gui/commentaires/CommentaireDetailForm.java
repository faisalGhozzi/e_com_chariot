/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.commentaires;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Commentaire;
import com.esprit.app.entity.User;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.article.ArticleForm;
import com.esprit.app.gui.commentaires.AddCommentaireForm;
import com.esprit.app.gui.commentaires.CommentaireForm;
import com.esprit.app.services.CommentairesService;
import com.esprit.app.services.UserService;

public class CommentaireDetailForm extends BaseForm{
    @SuppressWarnings("unused")
    private Resources theme;
    private CommentairesService cs = new CommentairesService();
    private UserService us = new UserService();
    public CommentaireDetailForm(Resources res,Commentaire c){
        super("Commentaire",BoxLayout.y());
        User u = us.getUser(c.getUser());
        
        SpanLabel nom = new SpanLabel("Nom : "+u.getNom());
        SpanLabel prenom = new SpanLabel("Prenom : "+u.getPrenom());

        SpanLabel contenu = new SpanLabel(c.getContenu());
        
        this.addAll(nom, prenom, contenu);
        
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new ArticleForm(res).showBack();
        });
        
        this.getToolbar().addCommandToRightBar("Delete", null , (evt) -> {
            cs.deleteCommentaire(c.getId());
            new ArticleForm(res).showBack();

        });
    }
}
