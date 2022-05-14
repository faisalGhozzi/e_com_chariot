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
import com.esprit.app.entity.Produit;
import com.esprit.app.utils.DataSource;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Map;
import java.util.List;

public class ProduitService {
    public ArrayList<Produit> produits;

    public static ProduitService instance = null;
    public boolean resultOk;
    private Produit produit = new Produit();
    private ConnectionRequest req;

    public ProduitService() {
	req = DataSource.getInstance().getRequest();
    }

    public boolean addProduit(Produit p){
        String url = Statics.BASE_URL+"/produits/json/new";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("nomproduit", p.getNom());
        req.addArgument("quantite", String.valueOf(p.getQuantite()));
        req.addArgument("prix", String.valueOf(p.getPrix()));
        req.addArgument("produits_directory", p.getImage());
        req.addArgument("description", p.getDescription());
        req.addArgument("idCateg", String.valueOf(p.getCategorie()));



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
    
    public boolean updateProduit(Produit p){
        String url = Statics.BASE_URL+"/produits/json/update";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("idproduit", String.valueOf(p.getId()));
        req.addArgument("nomproduit", p.getNom());
        req.addArgument("quantite", String.valueOf(p.getQuantite()));
        req.addArgument("prix", String.valueOf(p.getPrix()));
        req.addArgument("produits_directory", p.getImage());
        req.addArgument("description", p.getDescription());
        req.addArgument("idCateg", String.valueOf(p.getCategorie()));


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

    public ArrayList<Produit> parseProduits(String jsonText) throws IOException{
        produits = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> produitsListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        List<Map<String,Object>> list = (List<Map<String,Object>>)produitsListJson.get("root");
        for(Map<String,Object> obj : list){
            Produit p = new Produit();
            int id = (int)Float.parseFloat(obj.get("idproduit").toString());
            p.setId(id);
            String nom = obj.get("nomproduit").toString();
            p.setNom(nom);
            int qte = (int)Float.parseFloat(obj.get("quantite").toString());
            p.setQuantite(qte);
            float prix = Float.parseFloat(obj.get("prix").toString());
            p.setPrix(prix);
            String description = obj.get("description").toString();
            p.setDescription(description);
            String image = obj.get("image").toString();
            p.setImage(image);
            produits.add(p);
        }
        return produits;
    }
    
    public Produit parseProduit(String jsonText) throws IOException{
        JSONParser j = new JSONParser();
        Map<String,Object> produitJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        Produit p = new Produit();
        int id = (int)Float.parseFloat(produitJson.get("idproduit").toString());
        p.setId(id);
        String nom = produitJson.get("nomproduit").toString();
        p.setNom(nom);
        int qte = (int)Float.parseFloat(produitJson.get("quantite").toString());
        p.setQuantite(qte);
        float prix = Float.parseFloat(produitJson.get("prix").toString());
        p.setPrix(prix);
        String description = produitJson.get("description").toString();
        p.setDescription(description);
        String image = produitJson.get("image").toString();
        p.setImage(image);
        return p;
    }

    public ArrayList<Produit> getAllProduits(int categorie_id){
        String url = Statics.BASE_URL+"/produits/json/categorie/"+categorie_id;
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
                    produits = parseProduits(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return produits;
    }
    
    public Produit getProduit(int id){
        String url = Statics.BASE_URL+"/produits/json/"+id;
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
                    produit = parseProduit(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return produit;
    }

    public boolean deleteProduit(int id){
        String url = Statics.BASE_URL+"/produits/json/delete/"+id;
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
