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
import com.esprit.app.entity.Categorie;
import com.esprit.app.utils.DataSource;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class CategorieService {
    public ArrayList<Categorie> categories;

    public static CategorieService instance = null;
    public boolean resultOk;
    private Categorie categorie = new Categorie();
    private ConnectionRequest req;

    public CategorieService() {
	req = DataSource.getInstance().getRequest();
    }

    public boolean addCategorie(Categorie a){
        String url = Statics.BASE_URL+"/categories/json/new";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("nomcateg", String.valueOf(a.getNom()));
        req.addArgument("description", String.valueOf(a.getDescription()));

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
    
    public boolean updateCategorie(Categorie a){
        String url = Statics.BASE_URL+"/categories/json/update";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("id", String.valueOf(a.getNom()));
        req.addArgument("nomcateg", String.valueOf(a.getNom()));
        req.addArgument("description", String.valueOf(a.getDescription()));

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

    public ArrayList<Categorie> parseCategoriess(String jsonText) throws IOException{
        categories = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> categoriesListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        List<Map<String,Object>> list = (List<Map<String,Object>>)categoriesListJson.get("root");
        for(Map<String,Object> obj : list){
            Categorie a = new Categorie();
            int id = (int)Float.parseFloat(obj.get("idcateg").toString());
            a.setId(id);
            String nomcateg = obj.get("nomcateg").toString();
            a.setNom(nomcateg);
            String description = obj.get("description").toString();
            a.setDescription(description);
            categories.add(a);
        }
        return categories;
    }
    
    public Categorie parseCategorie(String jsonText) throws IOException{
        JSONParser j = new JSONParser();
        Map<String,Object> categorieJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        Categorie a = new Categorie();
        int id = (int)Float.parseFloat(categorieJson.get("idCategorie").toString());
        a.setId(id);
        String ville = categorieJson.get("ville").toString();
        String nomcateg = categorieJson.get("nomcateg").toString();
        a.setNom(nomcateg);
        String description = categorieJson.get("description").toString();
        a.setDescription(description);
        return a;
    }

    public ArrayList<Categorie> getAllCategories(){
        String url = Statics.BASE_URL+"/categories/json";
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
                    categories = parseCategoriess(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return categories;
    }
    
    public Categorie getCategorie(int id){
        String url = Statics.BASE_URL+"/categories/json/"+id;
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
                    categorie = parseCategorie(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return categorie;
    }

    public boolean deleteCategorie(int id){
        String url = Statics.BASE_URL+"/categories/json/delete/"+id;
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
