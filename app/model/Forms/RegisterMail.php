<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of RegisterMail
 *
 * @author MATY-PC
 */
class RegisterMail extends \Nette\Application\UI\Form {
    public function __construct($parent = NULL, $name = NULL){
        parent:: __construct($parent, $name);
        
        $this->setAction($parent -> link("Signklima:success"));
        $this->setMethod("formSubmitted");
        $this->addEmail('email', 'Email')
                ->setRequired(' email is needed')
                ->addRule(\Nette\Forms\Form::EMAIL, 'Not an valid address');
        
        
        
        $this->addSubmit("odeslat", "odeslat");
        
        return $this;
}
}