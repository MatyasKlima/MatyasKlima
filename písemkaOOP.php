<?php
$a=1;
$b=2;

//1.  class
class neco{
    
}

//2.finalni trida
final class neco1{
    const NECO=lala;
}

//3.konstruktor
function __construct($a){
    $this->a = $a;
}

//4.instance
$b = new neco();

//5.interface
interface neco5{}


//6.public - viditelnost

//public $neco;

//7.protected
//protected $neco;

//8.zend
echo "je to framework jako NETTE";

//9.staticke volani
test::$neco;

//10.promena trida
//public $neco;

//11.static const
$neco6::lala;

//12.instancni pristup ke const
$neco::NECO;

//13.instancni pristup k promenne
$neco::$a;

//14.pristup k promenne uvnitr tridy
$this->$neco;

//15.instancni pristup k metode
$neco->neco89();

//16. pristup ke static metode vne tridy
$neco::neco8();


































?>
