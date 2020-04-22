<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace \App\Presenters;
/**
 * Description of AutoPresenter
 *
 * @author MATY-PC
 */
class AutoPresenter extends BasePresenter{
    public function renderDefault(){
        
    }
    public function actionSuccess(){
        $params = $this->getRequest();
        $this->template->params = $params->post;
    }
    public function createComponentRegister2($name) {
        return new Register2($this,$name);
    }
            
}
