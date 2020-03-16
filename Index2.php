<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'class/IosobniAuto.php';
require 'class/Invozidlo.php';
require 'class/InakladniAuto.php';
require 'class/Vozidla.php';
require 'class/NakladniAuto.php';
require 'class/OsobniAuto.php';



$OsobniAuto = new OsobniAuto();

var_dump($OsobniAuto);

$NakladniAuto = new NakladniAuto();

var_Dump($NakladniAuto);


include "class/jablotron/Zdroj220V3A.php";
include "class/jablotron/Zdroj220V5A.php";
include "class/jablotron/jablotron.php";
include "class/jablotron/Ja101k.php";
include "class/jablotron/Ja106k.php";
include 'class/jablotron/Baterie12V3A.php';

$Ja101k = new Ja101k(new Zdroj220V3A());
$Ja101k -> setBaterie(new \varta\Baterie12V3A());

$Ja106k = new Ja106k(new Zdroj220V3A());
$Ja106k -> setBaterie(new \varta\Baterie12V3A());

var_dump($Ja101k);
var_dump($Ja106k);

$neco= array(1 =>"jablko",2 =>"hruska",3 => "pomeranc");

foreach ($neco as $key => $value) {
    echo "<br> $key = $value";
}

if ($value = "jablko"){
    echo "<br> neco";
}
$neco = array_reverse($neco);

var_dump($neco);
  
require "class/neco3.php";
$OVOCE = array (1 =>"jablko",2 =>"hruska",3 => "broskev");

include "class/neco1.php";

$promena = new neco1();
var_dump($promena);



$promena ->neco2($OVOCE);
$promena ->setOVOCE($OVOCE);
var_dump($promena);

$apple = new Apple\neco3();


echo $apple->blabla($OVOCE);

var_dump($apple);










        
        
?>

   















