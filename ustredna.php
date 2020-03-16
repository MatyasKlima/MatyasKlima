<?php
/**
 * ustredna dědí ustredny
 */

class ustredna extends ustredny {
/**
 *
 * @var type , soukroma promena
 */
    private $napajeni;
/**
 *
 * @var type, staticka promena
 */
    public static $baterie= null;
/**
 * @const, konstanta
 */
    const TYP_USTREDNY= 'eldes';


/**
 * 
 * @param Izdroje $zdroj, napajeni
 */
    public function __construct(Izdroje $zdroj) {
        $this->napajeni=$zdroj;
    }
    
/**
 * 
 * @return type, vrací hodnotu napajeni 
 */
    public function getNapajeni() {
        return $this->napajeni;
    }


    /**
     * 
     * @param type $napajeni,nastavi hodnotu napajeni
     */
    public function setNapajeni($napajeni) {
        $this->napajeni = $napajeni;
    }
    

 /**
  * 
  * @return type,vraci typ ustredny
  */
   public function getTyp(){
       return self::TYP_USTREDNY;
   }

}
