<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace \App\Presenters;
/**
 * Description of Register2
 *
 * @author MATY-PC
 */
class Register2 extends \Nette\Application\UI\Form {
    public function __construct($parent=NULL, $name=NULL) {
        parent::__construct($parent,$name);
        
        $this-> setAction($parent->link("Auto:success"));
        $this->setMethod ("POST");
        $this->addEmail("email", "email")->setRequired("Zadejte email")->addRule(\Nette\Forms\Form::EMAIL,"Vložte prosím správný tvar emailu");
        $this->addEmail("email2", "email znovu") ->setRequired("Zadejte email znovu") ->addRule(\Nette\Forms\Form::EQUAL, "Email nesouhlasi!",$this["email"]);
        $this->addText("jmeno","jmeno") ->setRequired("Zadejte jméno");    
        $this->addText("cislo","tel. číslo") ->setRequired("Zadejte tel. číslo")-> addRule(\Nette\Forms\Form:: INTEGER,"není číslo",6);
        $this->addSelect("platba","platba", array("Kartou","Hotovost") );
        $this->addSelect("pohlavi", "pohlavi", array("muz", "zena"));
        $this->addRadioList("pecivo", "druh pečiva", array("housky", "rohlíky", "chleba", "koláče", "rohlíky"));
        $this->addCheckboxList("napoje", "nápoje", array("Sprite", "Cola", "Džus","Plzeň","Kozel"));
        $this->addPassword("heslo","heslo") ->setRequired("Zadejte heslo");
    }
}
