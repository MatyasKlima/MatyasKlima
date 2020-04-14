<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of HouskyPresenter
 *
 * @author uzivatel
 */
class HouskyPresenter extends BasePresenter{
    public function renderDefault(){
    }
    
    
    
    public function actionSuccess(){
        $params = $this->getRequest();
        $this->template->params = $params->post;
    }
    
    public function createComponentRegister($name) {
    return new Register ($this, $name);
}
    
}
