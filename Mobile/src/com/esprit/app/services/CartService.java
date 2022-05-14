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
import com.esprit.app.entity.Cart;
import com.esprit.app.entity.Produit;
import com.esprit.app.utils.DataSource;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class CartService {
 
    public ArrayList<Cart> carts;

    public static CartService instance = null;
    public boolean resultOk;
    private Cart cart = new Cart();
    private ConnectionRequest req;

    public CartService() {
	req = DataSource.getInstance().getRequest();
    }

    public boolean addCart(Produit p){
        String url = Statics.BASE_URL+"/cart/json/add";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("produit", String.valueOf(p.getId()));
        
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

    public ArrayList<Cart> parseCart(String jsonText) throws IOException{
        carts = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> cartsListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        List<Map<String,Object>> list = (List<Map<String,Object>>)cartsListJson.get("root");
        for(Map<String,Object> obj : list){
            Cart c = new Cart();
            Produit p = new Produit();
            Map<String,Object> produit = (Map<String,Object>)obj.get("produit");
            int idProduit = (int)Float.parseFloat(produit.get("idproduit").toString());
            c.setProduit(idProduit);
            int qte = (int)Float.parseFloat(obj.get("quantite").toString());
            c.setQte(qte);
            carts.add(c);
        }
        return carts;
    }

    public ArrayList<Cart> getCart(){
        String url = Statics.BASE_URL+"/cart/json";
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
                    carts = parseCart(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return carts;
    }

    public boolean removeOneFromCart(int id){
        String url = Statics.BASE_URL+"/cart/json/remove";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("produit", String.valueOf(id));
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
    
    public boolean removeItemFromCart(int id){
        String url = Statics.BASE_URL+"/cart/json/delete";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("produit", String.valueOf(id));
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
    
    public boolean emptyCart(){
        String url = Statics.BASE_URL+"/cart/json/delete/all";
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
