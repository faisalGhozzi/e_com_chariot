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
import com.esprit.app.entity.User;
import com.esprit.app.utils.ConnectedUser;
import com.esprit.app.utils.DataSource;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class UserService {
    public ArrayList<User> users;

    private User userclass = new User();
    public static UserService instance = null;
    public boolean resultOk;
    private ConnectionRequest req;

    public UserService() {
	req = DataSource.getInstance().getRequest();
    }
    
    public boolean login(String username, String password){
        User u = new User();
        String url = Statics.BASE_URL+"/loginJson";
        req.setUrl(url);
        req.addArgument("email", username);
        req.addArgument("password", password);
        resultOk=false;
        // req.setRequestBody("{ \"email\" : \""+username+"\", \"password\" : \""+password+"\"}");
        req.setPost(true);
        InfiniteProgress prog = new InfiniteProgress();
        Dialog d = prog.showInfiniteBlocking();
        req.setDisposeOnCompletion(d);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200;
                //204 bad credentials / missing
                User usr = new User();
                try {
                    usr = parseUser(new String(req.getResponseData()));
                } catch (IOException ex) {
                    ex.printStackTrace();
                }
                ConnectedUser.setUserStatus(usr);
                req.removeResponseListener(this);
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        
        return resultOk;
    }
    
    public boolean addUser(User u){
        String url = Statics.BASE_URL+"/users/json/new";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("email",String.valueOf(u.getEmail()));
        req.addArgument("nom",String.valueOf(u.getNom()));
        req.addArgument("prenom",String.valueOf(u.getPrenom()));
        req.addArgument("password",String.valueOf(u.getPassword()));
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
    
    public boolean updateUser(User u){
        String url = Statics.BASE_URL+"/users/json/update";
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("id",String.valueOf(u.getId()));
        req.addArgument("email",String.valueOf(u.getEmail()));
        req.addArgument("nom",String.valueOf(u.getNom()));
        req.addArgument("prenom",String.valueOf(u.getPrenom()));
        req.addArgument("password",String.valueOf(u.getPassword()));
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
    
    public User parseUser(String jsonText) throws IOException{
        users = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> userstransportsListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        User u = new User();
        int id = (int)Float.parseFloat(userstransportsListJson.get("id").toString());
        u.setId(id);
        String nom = userstransportsListJson.get("nom").toString();
        u.setNom(nom);
        String prenom = userstransportsListJson.get("prenom").toString();
        u.setPrenom(prenom);
        String email = userstransportsListJson.get("email").toString();
        u.setEmail(email);
        users.add(u);
        return u;
    }
    
    public User getUser(int id){
        String url = Statics.BASE_URL+"/users/json/"+id;
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
                    userclass = parseUser(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return userclass;
    }

    
    public ArrayList<User> parseUsers(String jsonText) throws IOException{
        users = new ArrayList<>();
        JSONParser j = new JSONParser();
        Map<String,Object> usersListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
        List<Map<String,Object>> list = (List<Map<String,Object>>)usersListJson.get("root");
        for(Map<String,Object> obj : list){
            System.out.println("started parsing ");
            User u = new User();
            int id = (int)Float.parseFloat(obj.get("id").toString());
            u.setId(id);
            String email = obj.get("email").toString();
            u.setEmail(email);
            String nom = obj.get("nom").toString();
            u.setNom(nom);
            String prenom = obj.get("prenom").toString();
            u.setPrenom(prenom);
            users.add(u);
        }
        return users;
    }

    public ArrayList<User> getAllUsers(){
        String url = Statics.BASE_URL+"/users/json";
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
                    users = parseUsers(new String(req.getResponseData()));
                }catch(IOException ex){
                    ex.printStackTrace();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return users;
    }
    
    public boolean deleteUser(int id){
        String url = Statics.BASE_URL+"/users/json/delete/"+id;
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