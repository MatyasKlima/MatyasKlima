<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include 'test.php';

$message = "This is the default welcome page used to hovno test the correct "
                . "operation of the Apache2 server after installation on Ubuntu "
                . "systems. It is based on the equivalent page on Debian,"
                . " from which the Ubuntu Apache packaging is derived.";


        $BlackList = array("hovno", "prdel", "pica", "zrmd");

        function kontrola($message, $BlackList) {
            foreach ($BlackList as $value) {
                if (strpos($message, $value)) {
                    return"Toto slovo je zakazane:" . $value ;
                }
                return false;
            }
        }

        var_dump(kontrola($message, $BlackList));
        
