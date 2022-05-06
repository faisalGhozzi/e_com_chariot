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
import com.esprit.app.entity.Salle;
import com.esprit.app.utils.DataSource;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class SalleService {
    public ArrayList<Salle> salles;

    public static SalleService instance = null;
    public boolean resultOk;
    private Salle salle = new Salle();
    private ConnectionRequest req;

    public SalleService() {
	req = DataSource.getInstance().getRequest();
    }

    public boolean addSalle(Salle a){
        String url = Statics.BASE_URL+"/salles/json/new";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("nom", String.valueOf(a.getNom()));
        req.addArgument("prixsalle", String.valueOf(a.getPrix()));
        req.addArgument("image", String.valueOf(a.getImage()));
        req.addArgument("capacite", String.valueOf(a.getCapacite()));
        
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
    
    public boolean updateSalle(Salle a){
        String url = Statics.BASE_URL+"/salles/json/update";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("id", String.valueOf(a.getId()));
        req.addArgument("nom", String.valueOf(a.getNom()));
        req.addArgument("prixsalle", String.valueOf(a.getPrix()));
        req.addArgument("image", String.valueOf(a.getImage()));
        req.addArgument("capacite", String.valueOf(a.getCapacite()));
        
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

    public ArrayList<Salle> parseSalless(String jsonText) throws IOException{
        salles = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> sallesListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        List<Map<String,Object>> list = (List<Map<String,Object>>)sallesListJson.get("root");
        for(Map<String,Object> obj : list){
            Salle a = new Salle();
            int id = (int)Float.parseFloat(obj.get("idsalle").toString());
            a.setId(id);
            String nom = obj.get("nom").toString();
            a.setNom(nom);
            Float prixsalle = Float.parseFloat(obj.get("prixsalle").toString());
            a.setPrix(prixsalle);
            String image = obj.get("image").toString();
            a.setImage(image);
            int capacite = (int)Float.parseFloat(obj.get("capacite").toString());
            a.setCapacite(capacite);
            salles.add(a);
        }
        return salles;
    }
    
    public Salle parseSalle(String jsonText) throws IOException{
        JSONParser j = new JSONParser();
        Map<String,Object> salleJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        Salle a = new Salle();
        int id = (int)Float.parseFloat(salleJson.get("idsalle").toString());
        a.setId(id);
        String nom = salleJson.get("nom").toString();
        a.setNom(nom);
        Float prixsalle = Float.parseFloat(salleJson.get("prixsalle").toString());
        a.setPrix(prixsalle);
        String image = salleJson.get("image").toString();
        a.setImage(image);
        int capacite = (int)Float.parseFloat(salleJson.get("capacite").toString());
        a.setCapacite(capacite);
        return a;
    }

    public ArrayList<Salle> getAllSalles(){
        String url = Statics.BASE_URL+"/salles/json";
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
                    salles = parseSalless(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return salles;
    }
    
    public Salle getSalle(int id){
        String url = Statics.BASE_URL+"/salles/json/"+id;
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
                    salle = parseSalle(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return salle;
    }

    public boolean deleteSalle(int id){
        String url = Statics.BASE_URL+"/salles/json/delete/"+id;
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
