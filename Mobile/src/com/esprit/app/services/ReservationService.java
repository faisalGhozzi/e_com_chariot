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
import com.esprit.app.entity.Reservation;
import com.esprit.app.utils.DataSource;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.Map;
import java.util.List;

public class ReservationService {
    public ArrayList<Reservation> reservations;

    public static ReservationService instance = null;
    public boolean resultOk;
    private Reservation reservation = new Reservation();
    private ConnectionRequest req;

    public ReservationService() {
	req = DataSource.getInstance().getRequest();
    }

    public boolean addReservation(Reservation r){
        String url = Statics.BASE_URL+"/reservations/json/new";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("nbrp", String.valueOf(r.getNbp()));
        req.addArgument("date", String.valueOf(r.getDate()));
        req.addArgument("idsalle", String.valueOf(r.getSalle()));
        req.addArgument("iduser", String.valueOf(r.getClient()));


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
    
    public boolean updateReservation(Reservation r){
        String url = Statics.BASE_URL+"/reservations/json/update";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("id", String.valueOf(r.getId()));
        req.addArgument("nbrp", String.valueOf(r.getNbp()));
        req.addArgument("date", String.valueOf(r.getDate()));
        req.addArgument("idsalle", String.valueOf(r.getSalle()));
        req.addArgument("iduser", String.valueOf(r.getClient()));


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

    public ArrayList<Reservation> parseReservationss(String jsonText) throws IOException{
        reservations = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> reservationsListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        List<Map<String,Object>> list = (List<Map<String,Object>>)reservationsListJson.get("root");
        for(Map<String,Object> obj : list){
            Reservation r = new Reservation();
            int id = (int)Float.parseFloat(obj.get("idreservation").toString());
            r.setId(id);
            Map<String,Object> date = (Map<String,Object>)obj.get("date");
            r.setDate(new Date((long)Float.parseFloat(date.get("timestamp").toString())*1000));
            int nbrp = (int)Float.parseFloat(obj.get("nbrp").toString());
            r.setNbp(nbrp);
            Map<String,Object> salle = (Map<String,Object>)obj.get("idSalle");
            r.setSalle((int)Float.parseFloat(salle.get("idsalle").toString()));
            Map<String,Object> user = (Map<String,Object>)obj.get("idClient");
            r.setClient((int)Float.parseFloat(user.get("id").toString()));
            reservations.add(r);
        }
        return reservations;
    }
    
    public Reservation parseReservation(String jsonText) throws IOException{
        JSONParser j = new JSONParser();
        Map<String,Object> reservationJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        Reservation r = new Reservation();
        int id = (int)Float.parseFloat(reservationJson.get("idreservation").toString());
        r.setId(id);
        Map<String,Object> date = (Map<String,Object>)reservationJson.get("date");
        r.setDate(new Date((long)Float.parseFloat(date.get("timestamp").toString())*1000));
        int nbrp = (int)Float.parseFloat(reservationJson.get("nbrp").toString());
        r.setNbp(nbrp);
        Map<String,Object> salle = (Map<String,Object>)reservationJson.get("idSalle");
        r.setSalle((int)Float.parseFloat(salle.get("idsalle").toString()));
        Map<String,Object> user = (Map<String,Object>)reservationJson.get("idClient");
        r.setClient((int)Float.parseFloat(user.get("id").toString()));
        return r;
    }

    public ArrayList<Reservation> getReservationsParSalle(int salle_id){
        String url = Statics.BASE_URL+"/reservations/json/salle/"+salle_id;
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
                    reservations = parseReservationss(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return reservations;
    }
    
    public ArrayList<Reservation> getReservationsParUser(int user_id){
        String url = Statics.BASE_URL+"/reservations/json/user/"+user_id;
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
                    reservations = parseReservationss(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return reservations;
    }
    
    public Reservation getReservation(int id){
        String url = Statics.BASE_URL+"/reservations/json/"+id;
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
                    reservation = parseReservation(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return reservation;
    }

    public boolean deleteReservation(int id){
        String url = Statics.BASE_URL+"/reservations/json/delete/"+id;
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
