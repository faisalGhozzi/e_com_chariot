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
import com.esprit.app.entity.Adresse;
import com.esprit.app.utils.DataSource;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Map;
import java.util.List;

public class AdresseService {
    public ArrayList<Adresse> adresses;

    public static AdresseService instance = null;
    public boolean resultOk;
    private Adresse adresse = new Adresse();
    private ConnectionRequest req;

    public AdresseService() {
	req = DataSource.getInstance().getRequest();
    }

    public boolean addAdresse(Adresse a){
        String url = Statics.BASE_URL+"/adresses/json/new";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("nummaison", String.valueOf(a.getNumMaison()));
        req.addArgument("rue", String.valueOf(a.getRue()));
        req.addArgument("ville", String.valueOf(a.getVille()));
        req.addArgument("iduser", String.valueOf(1));


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

    public ArrayList<Adresse> parseAdressess(String jsonText) throws IOException{
        adresses = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> adressesListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        List<Map<String,Object>> list = (List<Map<String,Object>>)adressesListJson.get("root");
        for(Map<String,Object> obj : list){
            Adresse a = new Adresse();
            int id = (int)Float.parseFloat(obj.get("idAdresse").toString());
            a.setId(id);
            String ville = obj.get("ville").toString();
            a.setVille(ville);
            String rue = obj.get("rue").toString();
            a.setRue(rue);
            int numMaison = (int)Float.parseFloat(obj.get("nummaison").toString());
            a.setNumMaison(numMaison);
            Map<String,Object> user = (Map<String,Object>)obj.get("iduser");
            a.setIdUser((int)Float.parseFloat(user.get("id").toString()));
            adresses.add(a);
        }
        return adresses;
    }
    
    public Adresse parseAdresse(String jsonText) throws IOException{
        JSONParser j = new JSONParser();
        Map<String,Object> adresseJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        Adresse a = new Adresse();
        int id = (int)Float.parseFloat(adresseJson.get("idAdresse").toString());
        a.setId(id);
        String ville = adresseJson.get("ville").toString();
        a.setVille(ville);
        String rue = adresseJson.get("rue").toString();
        a.setRue(rue);
        int numMaison = (int)Float.parseFloat(adresseJson.get("nummaison").toString());
        a.setNumMaison(numMaison);
        Map<String,Object> user = (Map<String,Object>)adresseJson.get("iduser");
        a.setIdUser((int)Float.parseFloat(user.get("id").toString()));
        return a;
    }

    public ArrayList<Adresse> getAllAdresses(int user_id){
        String url = Statics.BASE_URL+"/adresses/json/"+user_id;
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
                    adresses = parseAdressess(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return adresses;
    }
    
    public Adresse getAdresse(int id){
        String url = Statics.BASE_URL+"/adresses/json/"+id;
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
                    adresse = parseAdresse(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return adresse;
    }

    public boolean deleteAdresse(int id){
        String url = Statics.BASE_URL+"/adresses/json/delete/"+id;
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
