<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;


class MatyasklimaPresenter extends BasePresenter{ 
  public function renderDefault(){
} 
public function renderSuccess(){
    $params = $this->getRequest() ->getParameters();
    $this->template->params =$params;
} 


public function createComponentRegister($name) {
    return new Register2 ($this, $name);
}
}

class Numbers extends BasePresenter{
   
    public function renderDefault(){
} 

public function renderSuccess(){
    $params = $this->getRequest() ->getParameters();
    $this->template->params =$params;
} 
    
    public function createComponentRegister($name) {
    return new Cislo ($this, $name);
}

    
   public $number = -1.24;
    
   public static function abs($number){
       return(abs($number));
   }
    
}

