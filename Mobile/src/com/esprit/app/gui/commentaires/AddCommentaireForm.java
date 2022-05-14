/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.commentaires;

import com.codename1.ui.Button;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Commentaire;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.commentaires.CommentaireForm;
import com.esprit.app.services.CommentairesService;

public class AddCommentaireForm extends BaseForm{
    
    @SuppressWarnings("unused")
    private Commentaire c = new Commentaire();
    private CommentairesService cs = new CommentairesService();
    
    
    public AddCommentaireForm(Resources res, int article_id, int comment_id){
        super(comment_id == 0 ? "Add Commentaire" : "Update Commentaire",BoxLayout.y());
        if (comment_id != 0){
            c = cs.getCommentaire(comment_id);
        }     
        Button add = new Button(comment_id == 0 ? "Create": "Update");
        TextField contenu = new TextField(comment_id == 0 ? "" : c.getContenu(), "Contenu");

        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Commentaire c = new Commentaire(contenu.getText(), article_id);
                if ( comment_id == 0 ){
                    cs.addCommentaire(c);
                }else{
                    c.setId(comment_id);
                    cs.updateCommentaire(c);
                }             
                new CommentaireForm(res, article_id).showBack();
            }
        });
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new CommentaireForm(res, article_id).showBack();
        });
        addAll(contenu, add);     
    }
}
