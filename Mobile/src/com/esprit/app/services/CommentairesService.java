/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.services;

import com.codename1.components.InfiniteProgress;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Dialog;
import com.codename1.ui.events.ActionListener;
import com.esprit.app.entity.Commentaire;
import com.esprit.app.utils.ConnectedUser;
import com.esprit.app.utils.DataSource;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;

public class CommentairesService {
    public ArrayList<Commentaire> commentaires;

    public static CommentairesService instance = null;
    public boolean resultOk;
    private Commentaire commentaire = new Commentaire();
    private ConnectionRequest req;

    public CommentairesService() {
	req = DataSource.getInstance().getRequest();
    }

    public boolean addCommentaire(Commentaire c){
        String url = Statics.BASE_URL+"/commentaires/json/new";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("contenuC", String.valueOf(c.getContenu()));
        req.addArgument("article", String.valueOf(c.getArticle()));
        req.addArgument("user", String.valueOf(ConnectedUser.getConnectedUser().getId()));


        InfiniteProgress prog = new InfiniteProgress();
        Dialog d = prog.showInfiniteBlocking();
        req.setDisposeOnCompletion(d);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200;
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOk;
    }
    
    public boolean updateCommentaire(Commentaire c){
        String url = Statics.BASE_URL+"/commentaires/json/update";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("id", String.valueOf(c.getId()));
        req.addArgument("contenuC", String.valueOf(c.getContenu()));
      
        InfiniteProgress prog = new InfiniteProgress();
        Dialog d = prog.showInfiniteBlocking();
        req.setDisposeOnCompletion(d);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200;
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOk;
    }

    public ArrayList<Commentaire> parseCommentairess(String jsonText) throws IOException{
        commentaires = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> commentairesListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        List<Map<String,Object>> list = (List<Map<String,Object>>)commentairesListJson.get("root");
        for(Map<String,Object> obj : list){
            Commentaire c = new Commentaire();
            int id = (int)Float.parseFloat(obj.get("idcommentaire").toString());
            c.setId(id);
    
            String contenuC = obj.get("contenuC").toString();
            c.setContenu(contenuC);
            
            Map<String,Object> datepub = (Map<String,Object>)obj.get("datepub");
            c.setDatepub(new Date((long)Float.parseFloat(datepub.get("timestamp").toString())*1000));
            
            Map<String,Object> idArticle = (Map<String,Object>)obj.get("idArticle");
            c.setArticle((int)Float.parseFloat(idArticle.get("idarticle").toString()));
   
            Map<String,Object> auteur = (Map<String,Object>)obj.get("auteurC");
            c.setUser((int)Float.parseFloat(auteur.get("id").toString()));
            commentaires.add(c);
        }
        return commentaires;
    }
    
    public Commentaire parseCommentaire(String jsonText) throws IOException{
        JSONParser j = new JSONParser();
        Map<String,Object> commentaireJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        Commentaire c = new Commentaire();
        int id = (int)Float.parseFloat(commentaireJson.get("idcommentaire").toString());
            c.setId(id);
    
            String contenuC = commentaireJson.get("contenuC").toString();
            c.setContenu(contenuC);
            
            Map<String,Object> datepub = (Map<String,Object>)commentaireJson.get("datepub");
            c.setDatepub(new Date((long)Float.parseFloat(datepub.get("timestamp").toString())*1000));
            
            Map<String,Object> idArticle = (Map<String,Object>)commentaireJson.get("idArticle");
            c.setArticle((int)Float.parseFloat(idArticle.get("idarticle").toString()));
   
            Map<String,Object> auteur = (Map<String,Object>)commentaireJson.get("auteur");
            c.setUser((int)Float.parseFloat(auteur.get("id").toString()));
            return c;
    }

    public ArrayList<Commentaire> getAllCommentaires(){
        String url = Statics.BASE_URL+"/commentaires/json";
        req.removeAllArguments();
        req.setUrl(url);
        req.setPost(false);
        InfiniteProgress prog = new InfiniteProgress();
        Dialog d = prog.showInfiniteBlocking();
        req.setDisposeOnCompletion(d);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                try{
                    commentaires = parseCommentairess(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return commentaires;
    }
    
    public Commentaire getCommentaire(int id){
        String url = Statics.BASE_URL+"/commentaires/json/"+id;
        req.removeAllArguments();
        req.setUrl(url);
        req.setPost(false);
        InfiniteProgress prog = new InfiniteProgress();
        Dialog d = prog.showInfiniteBlocking();
        req.setDisposeOnCompletion(d);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                try{
                    commentaire = parseCommentaire(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return commentaire;
    }

    public boolean deleteCommentaire(int id){
        String url = Statics.BASE_URL+"/commentaires/json/delete/"+id;
        req.setUrl(url);
        InfiniteProgress prog = new InfiniteProgress();
        Dialog d = prog.showInfiniteBlocking();
        req.setDisposeOnCompletion(d);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200;
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOk;
    }
}
