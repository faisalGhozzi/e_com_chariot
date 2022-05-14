/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.produits;

import com.codename1.capture.Capture;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.MultiButton;
import com.codename1.io.MultipartRequest;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.GenericListCellRenderer;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Categorie;
import com.esprit.app.entity.Produit;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.categorie.CategorieForm;
import com.esprit.app.gui.produits.ProduitsForm;
import com.esprit.app.services.CategorieService;
import com.esprit.app.services.ProduitService;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;


public class AddProduitsForm extends BaseForm{
    
    @SuppressWarnings("unused")
    private Produit p = new Produit();
    private ProduitService ps = new ProduitService();
    
    
    public AddProduitsForm(Resources res, int id){
        super(id == 0 ? "Add Produit" : "Update Produit",BoxLayout.y());
        if (id != 0){
            p = ps.getProduit(id);
        }     
        
        Label imgName = new Label();
        Label lbl_Image = new Label();
        
        Button add = new Button(id == 0 ? "Create": "Update");
        Button uploadImage = new Button("Upload Image");
        Button captureImage = new Button("Capture product");
        captureImage.addActionListener((evt) -> {
            Capture.capturePhoto(200, -1);
        });
        TextField nom = new TextField(id == 0 ? "" : p.getNom(), "Nom");
        TextField description = new TextField(id == 0 ? "" : p.getDescription(), "Description");
        TextField quantite = new TextField(id == 0 ? "" : String.valueOf(p.getQuantite()), "quantite", 5, TextField.NUMERIC);
        TextField prix = new TextField(id == 0 ? "" : String.valueOf(p.getPrix()), "Prix", 5, TextField.NUMERIC);
        
        List<Categorie> categories = new CategorieService().getAllCategories();
        List<Map<String, Object>> entries = new ArrayList<>();
        for(Categorie categorie : categories){
            Map<String, Object> entry = new HashMap<>();
            entry.put(String.valueOf(categorie.getId()), categorie.getNom());
            entry.put("Line2", categorie.getNom());
            entries.add(entry);
        }
        ComboBox<Map<String, Object>> cb_category = new ComboBox<>(entries.toArray()); 
        cb_category.setRenderer(new GenericListCellRenderer<>(new MultiButton(), new MultiButton()));


        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                String selected = cb_category.getSelectedItem().entrySet().toArray()[0].toString();
                int category_id = Integer.valueOf(selected.substring(0, selected.indexOf("=")));
                Produit p = new Produit(nom.getText(), Integer.parseInt(quantite.getText()), Float.parseFloat(prix.getText()), description.getText(), imgName.getText(), category_id);
                if ( id == 0 ){
                    ps.addProduit(p);
                }else{
                    p.setId(id);
                    ps.updateProduit(p);
                }             
                new ProduitsForm(res, category_id).showBack();
            }
        });
        
        uploadImage.addActionListener((evt) -> {
            MultipartRequest cr = new MultipartRequest();

            String filePath = Capture.capturePhoto(Display.getInstance().getDisplayWidth(), -1);
            String filename = filePath.substring(filePath.lastIndexOf("/") + 1, filePath.indexOf("."));
            String ext = filePath.substring(filePath.lastIndexOf("."), filePath.length());
            imgName.setText(filename + "" + ext);
            
            p.setImage(imgName.getText());
           
            cr.setUrl(Statics.BASE_URL + "/produits/json/upload");
            cr.setPost(true); 
            String mime = "image/*";
            try {
                cr.addData("file", filePath, mime);
            } catch (IOException ex) {
                Dialog.show("Error", ex.getMessage(), "OK", null);
            }

            cr.setFilename("file", filename.concat(ext));//any unique name you want

            InfiniteProgress prog = new InfiniteProgress();
            Dialog dlg = prog.showInifiniteBlocking();
            cr.setDisposeOnCompletion(dlg);
            NetworkManager.getInstance().addToQueueAndWait(cr);
            Dialog.show("Success", "Image uploaded", "OK", null);
            Image img;
            try {
                img = Image.createImage(filePath);
                lbl_Image.setIcon(img);
                this.revalidate();

            } catch (IOException ex) {
                ex.printStackTrace();
            }
                    
        });
        
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new CategorieForm(res).showBack();
        });
        addAll(lbl_Image, nom, description, prix, quantite, cb_category, uploadImage, captureImage,add);     
    }
}
