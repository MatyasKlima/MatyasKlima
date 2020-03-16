<?php


echo'neco';

include 'Izdroje.php';
include 'ustredny.php';
include 'ustredna.php';
include 'zdroj12VDC.php';


$class = new zdroj12VDC();

ustredna::$baterie= 1;


$class->setNapajeni($napajeni);

$class->getNapajeni();

$class->getTyp();

$konstanta = ustredna::TYP_USTREDNY;
