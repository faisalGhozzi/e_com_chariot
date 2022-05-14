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
import com.codename1.ui.Image;
import com.codename1.ui.events.ActionListener;
import com.esprit.app.entity.Livraison;
import com.esprit.app.utils.ConnectedUser;
import com.esprit.app.utils.DataSource;
import com.esprit.app.utils.Statics;
import com.google.zxing.qrcode.ErrorCorrectionLevel;
import com.google.zxing.qrcode.QRCode;
import com.google.zxing.qrcode.QREncoder;
import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class LivraisonService {
    public ArrayList<Livraison> livraisons;

    public static LivraisonService instance = null;
    public boolean resultOk;
    private Livraison livraison = new Livraison();
    private ConnectionRequest req;

    public LivraisonService() {
	req = DataSource.getInstance().getRequest();
    }

    public boolean addLivraison(Livraison l){
        String url = Statics.BASE_URL+"/livraisons/json/new";
        req.setUrl(url);
        req.setPost(true);
        System.out.println("From service");
        System.out.println(l.getProduit());
        req.addArgument("user", String.valueOf(ConnectedUser.getConnectedUser().getId()));
        req.addArgument("adresse", String.valueOf(l.getAdresse()));
        req.addArgument("produit", String.valueOf(l.getProduit()));
        req.addArgument("type", String.valueOf(l.getType()));

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
    
    public boolean updateLivraison(Livraison l){
        String url = Statics.BASE_URL+"/livraisons/json/update";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("id", String.valueOf(l.getId()));
        req.addArgument("livreur", String.valueOf(l.getLivreur()));

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
//
    public ArrayList<Livraison> parseLivraisons(String jsonText) throws IOException{
        livraisons = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> livraisonsListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        List<Map<String,Object>> list = (List<Map<String,Object>>)livraisonsListJson.get("root");
        for(Map<String,Object> obj : list){
            Livraison l = new Livraison();
            int id = (int)Float.parseFloat(obj.get("idlivraison").toString());
            l.setId(id);
            Map<String,Object> user = (Map<String,Object>)obj.get("iduser");
            l.setUser((int)Float.parseFloat(user.get("id").toString()));
            Map<String,Object> adresse = (Map<String,Object>)obj.get("adresse");
            l.setAdresse((int)Float.parseFloat(adresse.get("idAdresse").toString()));
            String type = obj.get("type").toString();
            l.setType(type);
            Map<String,Object> produit = (Map<String,Object>)obj.get("idProduit");
            l.setProduit((int)Float.parseFloat(produit.get("idproduit").toString()));
            livraisons.add(l);
        }
        return livraisons;
    }
    
    public Livraison parseLivraison(String jsonText) throws IOException{
        JSONParser j = new JSONParser();
        Map<String,Object> livraisonJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        Livraison l = new Livraison();
        int id = (int)Float.parseFloat(livraisonJson.get("idlivraison").toString());
        l.setId(id);
        Map<String,Object> user = (Map<String,Object>)livraisonJson.get("iduser");
        l.setUser((int)Float.parseFloat(user.get("id").toString()));
        Map<String,Object> adresse = (Map<String,Object>)livraisonJson.get("adresse");
        l.setAdresse((int)Float.parseFloat(user.get("idAdresse").toString()));
        String type = livraisonJson.get("type").toString();
        l.setType(type);
        return l;
    }

    public ArrayList<Livraison> getLivraisonsWithoutLivreur(){
        String url = Statics.BASE_URL+"/livraisons/nolivreur/json";
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
                    livraisons = parseLivraisons(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return livraisons;
    }
    
    public Livraison getLivraison(int id){
        String url = Statics.BASE_URL+"/livraisons/json/"+id;
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
                    livraison = parseLivraison(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return livraison;
    }
    
    public static Image QRCode(String s) {
        QRCode email = QREncoder.encode(s, ErrorCorrectionLevel.H);
        byte[][] bm = email.getMatrix().getArray();
        
        int d = bm.length; //Dimension in pixel
        int[] a = new int[d * d];
        for (int i = 0; i < d; i++) {
            for (int j = 0; j < d; j++) {
                a[i * d + j] = ((bm[i][j] - 1) & 0x00FFFFFF) | 0x99000000; //-> Appropriate transparency
            }
        }
        Image img = Image.createImage(a, d, d);
        return img; //Not scaled yet
    }
    
//
//    public boolean deleteLivraison(int id){
//        String url = Statics.BASE_URL+"/livraisons/json/delete/"+id;
//        req.setUrl(url);
//        InfiniteProgress prog = new InfiniteProgress();
//        Dialog d = prog.showInfiniteBlocking();
//        req.setDisposeOnCompletion(d);
//        req.addResponseListener(new ActionListener<NetworkEvent>() {
//            @Override
//            public void actionPerformed(NetworkEvent evt) {
//                resultOk = req.getResponseCode() == 200;
//                req.removeResponseListener(this);
//            }
//        });
//        NetworkManager.getInstance().addToQueueAndWait(req);
//        return resultOk;
//    }
}
