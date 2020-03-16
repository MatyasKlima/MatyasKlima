<?php

$a = 2;
$b = 3;


 //1. Anotace v php
    echo "Komentáře se používají pro snadnější orientaci v kodu";
echo "<br>";
 //2. Echo v php
    echo "lalala";
    
    echo "<br>";
 //3. echo, zlobivé znaky
    echo "\$";
    echo "<br>";
    
//4. vypsat obrázek pomocí echo
    //echo <img src="obrazek.png" alt="obrazek1" height="45" width="56"> ;
    
    
//5. Konstanta
    const neco1 ="neco";
    var_dump (neco1);
    echo "<br>";
//6.STRING
    $string = "string";
    var_dump($string);
    echo "<br>";
    
//7. BOOLEAN
    $boo = TRUE;
    var_dump($boo);
    echo "<br>";
    
//8. aritmetické operátory
    $a+$b;
    $a-$b;
    $a/$b;
    
    var_dump($a);   
   echo "<br>";
//9. Porovnávací operátory

   $a==$b;
   $a&&$b;
   $a!=$b;
   var_dump($b);
   echo "<br>";
   
//10. $a++
   
   echo "hodnota A bude o 1 větší";
   echo "<br>";
   
//11. $a = $b
   echo"hodnota A se rovná B";
   echo "<br>";
//12. $a!=$b
   echo"hodnota A se nerovná ";
   echo "<br>";
//13. podmínka IF
   if ($a==$b){
       echo"wululu";
   }
   else echo"neplatí";
   echo "<br>";
//14. ARRAY
   $data = array("neco", "neco1","neco2");
   var_dump($data);
   echo "<br>";
//15. cyklus for
   for ($a=0 ; $a<5; $a++) {
       echo $a;
   }
   echo "<br>";
//16. druhy funkcí
   echo"vlastní, matematicke, řetězcové";
       echo "<br>";
       echo" yea BOI";
       
   
       
       
       
       
       
       
       
       
       
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    
    
    
    
    
    
    
    
    
    
    
    
    
?>