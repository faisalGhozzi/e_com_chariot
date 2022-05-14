/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.cart;

import com.codename1.components.FloatingActionButton;
import com.codename1.components.ImageViewer;
import com.codename1.components.MultiButton;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.ComponentGroup;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.animations.CommonTransitions;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.entity.Cart;
import com.esprit.app.entity.Produit;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.gui.categorie.AddCategorieForm;
import com.esprit.app.gui.categorie.CategorieForm;
import com.esprit.app.gui.livraison.AddLivraisonForm;
import com.esprit.app.gui.produits.AddProduitsForm;
import com.esprit.app.gui.produits.ProduitsForm;
import com.esprit.app.services.CartService;
import com.esprit.app.services.LivraisonService;
import com.esprit.app.services.ProduitService;
import com.esprit.app.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class CartForm extends BaseForm{
    private CartService cs = new CartService();
    private ProduitService ps = new ProduitService();
    private ArrayList<Cart> cart;
    private List<List<Integer>> array = new ArrayList<List<Integer>>();
    private LivraisonService ls = new LivraisonService();

    
    public CartForm(Resources res) throws IOException{
        super("Cart", BoxLayout.y());
        
        cart = cs.getCart();
        if(cart.isEmpty()){
            this.add(new Label("Pas encore de produits dans le panier"));
        }else{
            float total = 0;
            
            Button resetCart = new Button("Supprimer Panier");
            Button buyItems = new Button("Acheter");
            
            buyItems.addActionListener((evt) -> {
                cs.emptyCart();
                new AddLivraisonForm(res, array, 0).show();
            });

            resetCart.addActionListener((evt) -> {
                cs.emptyCart();
                    try {
                        this.setTransitionOutAnimator(CommonTransitions.createEmpty());
                        new CartForm(res).show();
                    } catch (IOException ex) {
                        ex.printStackTrace();
                    }
            });

            ComponentGroup cg = new ComponentGroup();
            for (Cart item : cart) {
                
                Produit p = ps.getProduit(item.getProduit());
                List<Integer> lst = new ArrayList<>();

                lst.add(p.getId());
                lst.add(item.getQte());
                array.add(lst);
                Container c4 = new Container(BoxLayout.x());
                Container c3 = new Container(BoxLayout.y());
                Container c2 = new Container(BoxLayout.x());
                Container c1 = new Container(BoxLayout.y());
                Container c5 = new Container(BoxLayout.y());

                EncodedImage placeholder = EncodedImage.createFromImage(Image.createImage(200, 200, 0xffff0000), true);
                Image i = URLImage.createToStorage(placeholder, p.getImage() != null ? Statics.BASE_URL+"/uploads/produits/"+p.getImage() : Statics.BASE_URL+"/uploads/produits/no_image.png", p.getImage() != null ? Statics.BASE_URL+"/uploads/produits/"+p.getImage() : Statics.BASE_URL+"/uploads/produits/no_image.png");
                ImageViewer iv = new ImageViewer();
                iv.setImage(i.scaled(200, 200));

    //            ImageViewer iv=new ImageViewer();
    //            iv.setImage(Image.createImage("/"+ p.getImage()).scaled(80, 80));

                Button bt=new Button("X");

                bt.addActionListener(e->{
                    cs.removeItemFromCart(p.getId());
                    try {
                        this.setTransitionOutAnimator(CommonTransitions.createEmpty());
                        new CartForm(res).show();
                    } catch (IOException ex) {
                        ex.printStackTrace();
                    }
                });

                Button b1 = new Button("+");
                b1.addActionListener((evt) -> {
                    cs.addCart(p);
                    try {
                        this.setTransitionOutAnimator(CommonTransitions.createEmpty());
                        new CartForm(res).show();
                    } catch (IOException ex) {
                        ex.printStackTrace();
                    }
                });
                Button b2 = new Button("-");
                b2.addActionListener((evt) -> {
                    cs.removeOneFromCart(p.getId());
                    try {
                        this.setTransitionOutAnimator(CommonTransitions.createEmpty());
                        new CartForm(res).show();
                    } catch (IOException ex) {
                        ex.printStackTrace();
                    }
                });
                bt.getStyle().setPadding(0,0,0,0);

                Label lb1=new Label(".");
                Label lb2=new Label(".");
                lb1.setVisible(false);
                lb2.setVisible(false);

                c1.add(lb1);
                c1.add(bt);
                c1.add(lb2);

                c5.add(b1);
                c5.add(b2);

                c4.add(c1);
                c4.add(iv);
                c4.add(p.getNom());

                c2.add(new Label(Integer.toString(item.getQte())));
                c2.add(c5);
                //c2.add(b2);

                //c3.add(new SpanLabel(c.getProduct().getName()));
                c3.add(c2);


                c4.add(c3);
                c4.add(new Label(Float.toString(item.getQte() * p.getPrix())+" €"));
                total+=(item.getQte() * p.getPrix());
                cg.add(c4);   
            }
            this.add(cg);
            this.add(new Label("Total : "+String.valueOf(total)));
            this.add(resetCart);
            this.add(buyItems);
        }
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new HomeForm(res).showBack();
        });
    }    
}
