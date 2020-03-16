<!DOCTYPE html>
<html>
    <head>$promena
        <link rel="stylesheet" type="text/css" href="css.css">
        <title lang="cs">Moje Stranka</title>
    </head>
    <body>
        <p>Moje prvni html stranka.</p>s
        Dalsi text

        <a href="index.php">php</a>
        <p><a href="http://www.seznam.cz"> Odkaz na seznam</a></p>

        <hr>

        <h1 class="nadpis1">ahoj</h1>
        <h2>h</h2>
        <h3>ahoj</h3>
        <h4>ahoj</h4>
        <h5>ahoj</h5>
        <h6>ahoj</h6>

        <!--Obrazek-->

        <img src="image/2017-04-05-112730.jpg" alt="obrazek">

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mezera</p>

        <div>
            <div>
                <div>Text</div>
            </div>

        <div>
            <div>
                <div>Text</div>
            </div>
        </div>
        <div class="divclass">Div</div>

        <div class="TopMenu">
        </div>
        <div class="divclass">Div</div>

        <div class="TopMenu">
            <ul>
                <li><a href="https://www.google.cz/search?q=jablko&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjqwY2JuozXAhUFPBQKHeKsBBMQ_AUICigB&biw=1366&bih=647#imgrc=_">jablko</a></li>
                <li><a href="https://www.google.cz/search?q=pomeranc&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiTwICbuozXAhULWRQKHQOKBfwQ_AUICigB&biw=1366&bih=647">pomeranc</a></li>
                <li><a href="#">paprika</a></li>
                <li><a href="#">hruska</a></li>
                <li><a href="#">banan</a></li>
            </ul>
        </div>


        <div>
            <div>
                <div>Text</div>
            </div>
        </div>
        <div class="divclass">Div</div>

        <div class="TopMenu">
        <br>
        <br>

        <dl>
            <dt>Uzivatelske jmeno</dt>
            <dd>
                <input type="text" name="uzivatel" value="">
            </dd>
        </dl>
        <dl>    


            <dt>Heslo</dt>
            <dd>
                <input type="password" name="password">
            </dd>

        </dl>
        <dl>
            <dt></dt>
            <dd>
                Vyber auto:
                <input type="radio" name="auto" value="audi">audi
                <input type="radio" name="auto" value="mercedes">mercedes
                <input type="radio" name="auto" value="bmw">bmw
                <input type="radio" name="auto" value="skoda">skoda
                <input type="radio" name="auto" value="buggati">buggati
                <input type="radio" name="auto" value="trabant">trabant

            </dd>

        </dl>


        <dl>
            <dt></dt>
            <dd>
                <select name="mesto">
                    <option value="" selected>----Vyber si mesto----</option>
                    <option value="1">Praha</option>
                    <option value="2">Brno</option>
                    <option value="3">Ostrava</option>
                    <option value="4">Plzen</option>
                    <option value="5">Vitkovice</option>


                </select>

            </dd>

        </dl>


        <dl>
            <dt>    </dt>
            <dd>
                <button name="odeslat">odeslat</button>
            </dd>

        </dl>


        <dl>
            <dt></dt>
            <dd>
                <input type="checkbox" name="neco" value="neco">neco
                <input type="checkbox" name="neco" value="kdo">neco2
            </dd>




        </dl>


        <a href="http://www.florbalchodov.cz"><img src="image/updater.png" border='0' alt='HTML prirucka'></a>
        <a href="image/updater.png"><img src="image/updater.png"  border='0'alt='HTML prirucka'></a>

        <table class="table1" cellpadding="4" cellspacing="5">
            <thead class="head">
                <tr>



                    <td><b>Hlavicka</b></td>
                </tr>
            </thead>
            <tr>
                <td rowspan="2"> Sporty
                </td>

                <td>fotbal</td>
                <td>florbal</td>
                <td>basketbal</td>
                <td>hokej</td>

            </tr>
            <tr>

                <td>hazena</td>
                <td>tenis</td>
                <td>golf</td>
                <td>volejbal</td>
            </tr>
            <tr>
                <td>3.1</td>
                <td>3.2</td>
                <td>3.3</td>
                <td>3.4</td>
                <td>3.5</td>
            </tr>
            <tr>
                <td>4.1</td>
                <td>4.2</td>
                <td>4.3</td>
                <td>4.4</td>
                <td>4.5</td>
            </tr>
            <tr>
                <td>5.1</td>
                <td>5.2</td>
                <td>5.3</td>
                <td>5.4</td>
                <td>5.5</td>
            </tr>
            <tr>
                <td>6.1</td>
                <td>6.2</td>
                <td>6.3</td>
                <td>6.4</td>
                <td>6.5</td>
            </tr
            <tr>
                <td>7.1</td>
                <td>7.2</td>
                <td>7.3</td>
                <td>7.4</td>
                <td>7.5</td>
            </tr>
            <tr>
                <td>8.1</td>
                <td>8.2</td>
                <td>8.3</td>
                <td>8.4</td>
                <td>8.5</td>
            </tr>
            <tr>
                <td>9.1</td>
                <td>9.2</td>
                <td>9.3</td>
                <td>9.4</td>
                <td>9.5</td>
            </tr>
            <tr>
                <td>10.1</td>
                <td>10.2</td>
                <td>10.3</td>
                <td>10.4</td>
                <td>10.5</td>
            </tr>
            <tfoot class="foot">
                <tr>
                    <td colspan="4">

                    </td>
                    <td>Paticka</td>


                </tr>



            </tfoot>









        </table>

        <?PHP
        $a = 2;
        $b = 2;
        if ($a == $b) {
            echo"plati";
            if ($a != $b) {
                echo"jo";
            }
        } elseif ($b > $a) {
            echo"ne";
        } else {
            echo"neplati";
        }

        echo '<br>';
        $ovoce = "pomeranc";
        switch ($ovoce) {
            case "pomeranc":

                echo "pomeranc";

                break;

            case "jablko":

                echo "jablko";

                break;

            case "hruska":

                echo "hruska";

                break;

            default;

                echo 'neni zadne platne ovoce';

                break;
        }

        $data = array(1 => "jablka", 2 => "pomerance", 3 => "banany", 4 => "citron");

        echo $data["2"];


        $auta['osobni']['skoda']['1'] = 'octavia';
        $auta['osobni']['skoda']['2'] = 'fabia';
        $auta['osobni']['lada']['1'] = 'niva';
        $auta['nakladni']['tatra']['1'] = '815';

      var_dump($auta);

        echo $auta{"osobni"}{"skoda"}{"2"};

        var_dump(array_merge($auta, $data));

        $auta = "ssdsdsdsds";
        if (!is_array($auta)) {
            echo "neni pole";
        }





        $data = array(1 => "jablka", 2 => "pomerance", 3 => "banany", 4 => "citron");

        var_dump($data);

        foreach ($data as $key => $value) {
            echo $key . " - " . $value . "<br>";
        };




        $radek = 5;
        $sloupec = 8;

        echo"<table border = \"1\">";

        for ($index = 1; $index < $radek = 5 + 1; $index++) {
            echo "<tr>";
            for ($index1 = 1; $index1 < $sloupec = 8 + 1; $index1++) {
                echo "<td>" . $index . "-" . $index1 . "</td>";
            }
            echo '</tr>';
        }



        echo '</table>';

//
        $message = "This is the default welcome page used to test the correct "
                . "operation of the Apache2 server after installation on Ubuntu "
                . "systems. It is based on the equivalent page on Debian,"
                . " from which the Ubuntu Apache packaging is derived.";


        $BlackList = array("hovno", "prdel", "pica", "zrmd");

        function kontrola($message, $BlackList) {
            foreach ($BlackList as $value) {
                if (strpos($message, $value)) {
                    return"Toto slovo je zakazane" . $value;
                }
                return true;
            }
        }

        echo kontrola($message, $BlackList);


        echo "<br>";





        $mesice = array(1 => "leden", 2 => "unor", 3 => "brezen", 4 => "duben", 5 => "kveten",
            6 => "cerven", 7 => "cervenec", 8 => "srpen", 9 => "zari", 10 => "rijen",
            11 => "listopad", 12 => "prosinec");

        $mesic = 3;

        echo "<br>" . mesic($mesice, 3);
        echo "<br>" . mesic($mesice, 2);
        echo "<br>" . mesic($mesice, 5);
        echo "<br>" . mesic($mesice, 8);

        function mesic($mesice, $mesic) {
            return $mesice[$mesic];
            foreach ($mesice as $key => $value) {
                if ($mesice == $key)
                    ;
            }

            ;
        }

        echo"<br>";

        $zaklad = 100;

        function DPH($zaklad) {
            $dph = $zaklad / 100 * 21;
            $vysledek = $zaklad + $dph;
            return round($vysledek, $precision = 2);
        }

        echo DPH($zaklad);


        echo "<br>";

        $cislo1 = 2.4286;

        $cislo2 = 3.2639;

        $zaokrouhleni = 4;

        /**
         * secte cisla a zaokrouhli na 4 des. mista
         * @param decimal $cislo1
         * @param decimal $cislo2
         * @param int $zaoukrohleni
         * @return decimal
         */
        function soucet($cislo1, $cislo2 = 2.1234, $zaoukrohleni = 4) {
            $vysledek = round($cislo1 + $cislo2, $zaoukrohleni);



            if ($vysledek < 10) {
                echo "min<br>";
            } elseif ($vysledek > 10) {
                echo "vic<br>";
            }
            return $vysledek;
        }

        echo soucet($cislo1, $cislo2);


        require 'Index2.php';





        $a = 5;

        $b = 10;

        $c = "10";

        $d = TRUE;

        $e = 10.54;

        $f = "dsdsdsds";

        $g = array("jablka", "hrusky", "tresne");







        echo "<br>";


        echo $f;

        var_dump($f);


        echo "\\";


        echo "<br>";


        echo "<a href = \"index.php\">neco</a>";

        echo "<br>";

        echo $data = "string";

        echo "<br>";

        echo $data = 1;

        echo "<br>";

        echo $data = 1.12;

        echo "<br>";
        // přirovnavací 
        $a++;

        $a--;
        // logické
        $a && $b;
        $a || $b;

        echo $a++;
        echo "<br>";

        var_dump($a == $b);

        var_dump($a === $b);
        echo "<br>";

        for ($b = 0; $b < count($a); $b++) {
            
        }
        echo "<br>";

        foreach ($g as $key => $value) {
            echo "data1";
            echo "data2";
            echo "data3";
        }
        echo "<br>";

        function jmeno() {
            
        }

        echo "<br>";

        /**
         * @author Matyas Klima
         * @name index.php
         * @return int 
         * @method type methodName(type $paramName) 
         * @global type $variable
         * @copyright (c) 2018, Matyas Klima
         * @package name
         * @example path description
         * @category name
         * @see elementName
         */
        echo "<img src = \"img/obr1\ alt = \"text\" \"title = \"text\">";

        const neco = "neco1";
        echo "<br>";

        echo $data = TRUE;

        var_dump($data);

        echo "<br>";
        $data = "string";

        echo "<br>";

        $data1 = TRUE;

//"ch"."q"."w"."e"."r"."t"."z"."u"."i"."o"."p"."a"."s"."d"."f".
        //   "g"."h"."j"."k".
        //  "l"."y"."x"."c"."v"."b"."n"."m"
//aritmeticke
        $a + $b;
        $a - $b;
        $a * $b;
        $a / $b;

        //porovnavaci  
        $a == $b;
        $a !== $b;
        $a > $b;



        /* $pismena  = array("q","w","e","r","t","z","u","i","o","p","a","s","d","f".
          "g"."h"."j"."k".
          "l"."y"."x"."c"."v"."b"."n"."m");

          function  Validator ($slovo1,$array) {
          foreach ($array as $slovo){
          if ($slovo == $slovo1){
          return "obsahuje písmena";
          } else {
          return "nic";
          }
          }

          }

          $zadani = 12345;
          explode($pismena, $zadani);


          echo Validator($zadani, $pismena);
          /**
          $email = "neco@neco.cz";

          $znaky = ["povolit" => "@", "povolit" => ".", "povolit" => "cz", "zakazat" => "!",
          "zakazat" => "#", "zakazat" => "$", "zakazat" => "%", "zakazat" => "^",
          "zakazat" => "&", "zakazat" => "*",
          "zakazat" => "+", "zakazat" => "ě", "zakazat" => "š", "zakazat" => "č",
          "zakazat" => "ř", "zakazat" => "ž", "zakazat" => "ý", "zakazat" => "á",
          "zakazat" => "í", "zakazat" => "é", "zakazat" => "=", "zakazat" => "´"];

          function validator($email, $znaky) {
          foreach ($znaky as $key => $value) {
          $kontrola = strstr($value, $email);

          if ($key == "povolit") {
          return "plati";
          } elseif ($key == "zakazat") {
          return "neplati";
          }

          }
          }

          echo validator($email, $znaky);
         * 
         */
        $psc = '14100';

        function PSC($psc) {
            if (preg_match('/^[0-9]{5}$/', $psc)) {
                return" plati";
            } else {
                return "neplati";
            }
        }

        echo PSC($psc);

        echo '<br>';



        $mail1 = "neco@neco.cz";

        function email($mail1) {
            if (preg_match('/^[0-9a-zA-Z]{1,30}\@[a-zA-Z]{1,30}\.[a-zA-Z]{1,30}$/', $mail1)) {
                return" plati";
            } else {
                return "neplati";
            }
        }

        echo email($mail1);


        echo '<br>';

        $IPadresa = "123.423.3.123";

        function IP($IPadresa) {
            if (preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{1}\.[0-9]{3}$/', $IPadresa)) {
                return" plati";
            } else {
                return "neplati";
            }
        }

        echo IP($IPadresa);


        echo '<br>';


        $datum123 = "12.12.2015";

        function datum($datum123) {
            if (preg_match('/^[0-9]{1,2}\.[0-9]{2}\.[0-9]{1,5}$/', $datum123)) {
                return" plati";
            } else {
                return "neplati";
            }
        }

        echo datum($datum123);
        
        
        
        
        
        
require 'class/Staty.php';



$data_staty [1]["nazev"] = "Ceska republika";
$data_staty [1]["pocet_obyvatel"] = "100000000";
$data_staty [1]["pocet_mest"] = "1000000";
$data_staty [1]["pocet_narodnich_parku"] = "4";
$data_staty [1]["pocet_rek"] = "45";
$data_staty [1]["jmeno_prezidenta"] = "Milos Zeman";
$data_staty [1]["pocet_skol"] = "6900000";
$data_staty [1]["rozloha"] = "nevim";
$data_staty [1]["nazev_hlavniho_mesta"] = "Praha";
$data_staty [1]["mena"] = "Ceska koruna";

$data_staty [2]["nazev"] = "Nemecko";
$data_staty [2]["pocet_obyvatel"] = "3000000";
$data_staty [2]["pocet_mest"] = "34567766";
$data_staty [2]["pocet_narodnich_parku"] = "234";
$data_staty [2]["pocet_rek"] = "323";
$data_staty [2]["jmeno_prezidenta"] = "nevim";
$data_staty [2]["pocet_skol"] = "234533";
$data_staty [2]["rozloha"] = "78533545";
$data_staty [2]["nazev_hlavniho_mesta"] = "Berlin";
$data_staty [2]["mena"] = "Euro";

$data_staty [3]["nazev"] = "Polsko";
$data_staty [3]["pocet_obyvatel"] = "234234";
$data_staty [3]["pocet_mest"] = "23436458";
$data_staty [3]["pocet_narodnich_parku"] = "78675867";
$data_staty [3]["pocet_rek"] = "7657";
$data_staty [3]["jmeno_prezidenta"] = "nevim";
$data_staty [3]["pocet_skol"] = "235654";
$data_staty [3]["rozloha"] = "3636567";
$data_staty [3]["nazev_hlavniho_mesta"] = "Warsava";
$data_staty [3]["mena"] = "nevim";


$data_staty [4]["nazev"] = "Nizozemsko";
$data_staty [4]["pocet_obyvatel"] = "234566";
$data_staty [4]["pocet_mest"] = "23436458";
$data_staty [4]["pocet_narodnich_parku"] = "78675867";
$data_staty [4]["pocet_rek"] = "7657";
$data_staty [4]["jmeno_prezidenta"] = "nevim";
$data_staty [4]["pocet_skol"] = "235654";
$data_staty [4]["rozloha"] = "3636567";
$data_staty [4]["nazev_hlavniho_mesta"] = "Warsava";
$data_staty [4]["mena"] = "nevim";

$data_staty [5]["nazev"] = "Rakousko";
$data_staty [5]["pocet_obyvatel"] = "2345644";
$data_staty [5]["pocet_mest"] = "23436458";
$data_staty [5]["pocet_narodnich_parku"] = "78675867";
$data_staty [5]["pocet_rek"] = "7657";
$data_staty [5]["jmeno_prezidenta"] = "nevim";
$data_staty [5]["pocet_skol"] = "235654";
$data_staty [5]["rozloha"] = "3636567";
$data_staty [5]["nazev_hlavniho_mesta"] = "Warsava";
$data_staty [5]["mena"] = "nevim";

$data_staty [6]["nazev"] = "Slovensko";
$data_staty [6]["pocet_obyvatel"] = "2345644";
$data_staty [6]["pocet_mest"] = "23436458";
$data_staty [6]["pocet_narodnich_parku"] = "78675867";
$data_staty [6]["pocet_rek"] = "7657";
$data_staty [6]["jmeno_prezidenta"] = "nevim";
$data_staty [6]["pocet_skol"] = "235654";
$data_staty [6]["rozloha"] = "3636567";
$data_staty [6]["nazev_hlavniho_mesta"] = "Warsava";
$data_staty [6]["mena"] = "nevim";

$data_staty [7]["nazev"] = "Rusko";
$data_staty [7]["pocet_obyvatel"] = "23456664";
$data_staty [7]["pocet_mest"] = "23436458";
$data_staty [7]["pocet_narodnich_parku"] = "78675867";
$data_staty [7]["pocet_rek"] = "7657";
$data_staty [7]["jmeno_prezidenta"] = "nevim";
$data_staty [7]["pocet_skol"] = "235654";
$data_staty [7]["rozloha"] = "3636567";
$data_staty [7]["nazev_hlavniho_mesta"] = "Warsava";
$data_staty [7]["mena"] = "nevim";

$data_staty [8]["nazev"] = "Ukrajina";
$data_staty [8]["pocet_obyvatel"] = "23456";
$data_staty [8]["pocet_mest"] = "23436458";
$data_staty [8]["pocet_narodnich_parku"] = "78675867";
$data_staty [8]["pocet_rek"] = "7657";
$data_staty [8]["jmeno_prezidenta"] = "nevim";
$data_staty [8]["pocet_skol"] = "235654";
$data_staty [8]["rozloha"] = "3636567";
$data_staty [8]["nazev_hlavniho_mesta"] = "Warsava";
$data_staty [8]["mena"] = "nevim";

$data_staty [9]["nazev"] = "Madarsko";
$data_staty [9]["pocet_obyvatel"] = "2566644";
$data_staty [9]["pocet_mest"] = "23436458";
$data_staty [9]["pocet_narodnich_parku"] = "78675867";
$data_staty [9]["pocet_rek"] = "7657";
$data_staty [9]["jmeno_prezidenta"] = "nevim";
$data_staty [9]["pocet_skol"] = "235654";
$data_staty [9]["rozloha"] = "3636567";
$data_staty [9]["nazev_hlavniho_mesta"] = "Warsava";
$data_staty [9]["mena"] = "nevim";

$data_staty [10]["nazev"] = "Spanelsko";
$data_staty [10]["pocet_obyvatel"] = "2534352";
$data_staty [10]["pocet_mest"] = "593262354";
$data_staty [10]["pocet_narodnich_parku"] = "78675867";
$data_staty [10]["pocet_rek"] = "7657";
$data_staty [10]["jmeno_prezidenta"] = "nevim";
$data_staty [10]["pocet_skol"] = "235654";
$data_staty [10]["rozloha"] = "3636567";
$data_staty [10]["nazev_hlavniho_mesta"] = "Warsava";
$data_staty [10]["mena"] = "nevim";
        

$staty = new Staty($data_staty);


var_dump($staty);
        
        
        
   
        echo $staty->nejvetsiStat();
        echo "<br>";
        echo $staty->nejmensiStat();
        echo "<br>";
        echo $staty->pocetMest();
        
        
        ?>


    </body>

</html>
