<?php

$mena = "CZK";
$cena = 54321.234;

function getPrice($cena,$mena){
    return number_format(round($cena, 1),2,',',' '). " ".$mena;
}

echo getPrice($cena, $mena);




?>


