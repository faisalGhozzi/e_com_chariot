/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.app.gui.livraison;

import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.esprit.app.gui.BaseForm;
import com.esprit.app.gui.HomeForm;
import com.esprit.app.services.LivraisonService;

public class QRFrom extends BaseForm {
    LivraisonService ls = new LivraisonService();
    public QRFrom(Resources res, String str){
        super("Informations",BoxLayout.y());
        this.add(ls.QRCode(str));
        
        this.getToolbar().addCommandToLeftBar("Return", null, (evt) -> {
            new HomeForm(res).showBack();
        });
        
    }
}
