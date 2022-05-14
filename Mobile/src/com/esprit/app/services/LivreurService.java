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
import com.esprit.app.entity.Livreur;
import com.esprit.app.utils.DataSource;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class LivreurService {
    public ArrayList<Livreur> livreurs;

    public static LivreurService instance = null;
    public boolean resultOk;
    private Livreur livreur = new Livreur();
    private ConnectionRequest req;

    public LivreurService() {
	req = DataSource.getInstance().getRequest();
    }

    public boolean addLivreur(Livreur l){
        String url = Statics.BASE_URL+"/livreurs/json/new";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("nom", String.valueOf(l.getNom()));
        req.addArgument("prenom", String.valueOf(l.getPrenom()));
        req.addArgument("tel", String.valueOf(l.getTel()));
        req.addArgument("email", String.valueOf(l.getEmail()));

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
    
    public boolean updateLivreur(Livreur l){
        String url = Statics.BASE_URL+"/livreurs/json/update";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("id", String.valueOf(l.getId()));
        req.addArgument("nom", String.valueOf(l.getNom()));
        req.addArgument("prenom", String.valueOf(l.getPrenom()));
        req.addArgument("tel", String.valueOf(l.getTel()));
        req.addArgument("email", String.valueOf(l.getEmail()));

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

    public ArrayList<Livreur> parseLivreurss(String jsonText) throws IOException{
        livreurs = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> livreursListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        List<Map<String,Object>> list = (List<Map<String,Object>>)livreursListJson.get("root");
        for(Map<String,Object> obj : list){
            Livreur l = new Livreur();
            int id = (int)Float.parseFloat(obj.get("idlivreur").toString());
            l.setId(id);
            String nomlivreur = obj.get("nomlivreur").toString();
            l.setNom(nomlivreur);
            String numtel = obj.get("numtel").toString();
            l.setTel(numtel);
            String prenom = obj.get("prenom").toString();
            l.setPrenom(prenom);
            String email = obj.get("email").toString();
            l.setEmail(email);
            livreurs.add(l);
        }
        return livreurs;
    }
    
    public Livreur parseLivreur(String jsonText) throws IOException{
        JSONParser j = new JSONParser();
        Map<String,Object> livreurJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        Livreur l = new Livreur();
        int id = (int)Float.parseFloat(livreurJson.get("idlivreur").toString());
        l.setId(id);
        String nomlivreur = livreurJson.get("nomlivreur").toString();
        l.setNom(nomlivreur);
        String numtel = livreurJson.get("numtel").toString();
        l.setTel(numtel);
        String prenom = livreurJson.get("prenom").toString();
        l.setPrenom(prenom);
        String email = livreurJson.get("email").toString();
        l.setEmail(email);
        return l;
    }

    public ArrayList<Livreur> getAllLivreurs(){
        String url = Statics.BASE_URL+"/livreurs/json";
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
                    livreurs = parseLivreurss(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return livreurs;
    }
    
    public Livreur getLivreur(int id){
        String url = Statics.BASE_URL+"/livreurs/json/"+id;
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
                    livreur = parseLivreur(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return livreur;
    }

    public boolean deleteLivreur(int id){
        String url = Statics.BASE_URL+"/livreurs/json/delete/"+id;
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
