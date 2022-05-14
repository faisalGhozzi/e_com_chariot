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
import com.esprit.app.entity.Article;
import com.esprit.app.utils.DataSource;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class ArticleService {
    public ArrayList<Article> articles;

    public static ArticleService instance = null;
    public boolean resultOk;
    private Article article = new Article();
    private ConnectionRequest req;

    public ArticleService() {
	req = DataSource.getInstance().getRequest();
    }

    public boolean addArticle(Article a){
        String url = Statics.BASE_URL+"/article/json/new";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("contenu", String.valueOf(a.getContenu()));
        req.addArgument("titre", String.valueOf(a.getTitre()));
        req.addArgument("article_directory", String.valueOf(a.getImage()));
        req.addArgument("auteur", String.valueOf(a.getAuteur()));

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
    
    public boolean updateArticle(Article a){
        String url = Statics.BASE_URL+"/article/json/update";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("id", String.valueOf(a.getId()));
        req.addArgument("contenu", String.valueOf(a.getContenu()));
        req.addArgument("titre", String.valueOf(a.getTitre()));
        req.addArgument("article_directory", String.valueOf(a.getImage()));
        req.addArgument("auteur", String.valueOf(a.getAuteur()));

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

    public ArrayList<Article> parseArticless(String jsonText) throws IOException{
        articles = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> articlesListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        List<Map<String,Object>> list = (List<Map<String,Object>>)articlesListJson.get("root");
        for(Map<String,Object> obj : list){
            Article a = new Article();
            int id = (int)Float.parseFloat(obj.get("idarticle").toString());
            a.setId(id);
            String contenu = obj.get("contenu").toString();
            a.setContenu(contenu);
            String titre = obj.get("titre").toString();
            a.setTitre(titre);
            String etat = obj.get("etat").toString();
            a.setEtat(etat);
            String image = obj.get("image").toString();
            a.setImage(image);
            int nbrreact = (int)Float.parseFloat(obj.get("nbrreact").toString());
            a.setNbrreact(nbrreact);
            Map<String,Object> user = (Map<String,Object>)obj.get("auteur");
            a.setAuteur((int)Float.parseFloat(user.get("id").toString()));
            articles.add(a);
        }
        return articles;
    }
    
    public Article parseArticle(String jsonText) throws IOException{
        JSONParser j = new JSONParser();
        Map<String,Object> articleJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        Article a = new Article();
        int id = (int)Float.parseFloat(articleJson.get("idarticle").toString());
            a.setId(id);
            String contenu = articleJson.get("contenu").toString();
            a.setContenu(contenu);
            String titre = articleJson.get("titre").toString();
            a.setTitre(titre);
            String etat = articleJson.get("etat").toString();
            a.setEtat(etat);
            String image = articleJson.get("image").toString();
            a.setImage(image);
            int nbrreact = (int)Float.parseFloat(articleJson.get("nbrreact").toString());
            a.setNbrreact(nbrreact);
            Map<String,Object> user = (Map<String,Object>)articleJson.get("auteur");
            a.setAuteur((int)Float.parseFloat(user.get("id").toString()));
            return a;
    }

    public ArrayList<Article> getAllArticles(){
        String url = Statics.BASE_URL+"/article/json";
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
                    articles = parseArticless(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return articles;
    }
    
    public Article getArticle(int id){
        String url = Statics.BASE_URL+"/article/json/"+id;
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
                    article = parseArticle(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return article;
    }

    public boolean deleteArticle(int id){
        String url = Statics.BASE_URL+"/article/json/delete/"+id;
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
