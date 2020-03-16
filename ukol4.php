<?php

$message = "Inu Tomáši, je to tvrdé, ale varování bylo dost a holt "
        . "když si někdo nedá říct, musí přijít facka pořádná.";


        $zakazSlova = array("Tomáši", "facka");

        function kontrola($message, $zakazSlova) {
            foreach ($zakazSlova as $value) {
                if (strpos($message, $value)) {
                    return"Toto slovo je zakazane " . $value;
                }
                return true;
            }
        }

        echo kontrola($message, $zakazSlova);


        echo "<br>";


