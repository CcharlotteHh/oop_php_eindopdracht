<?php

require_once "figuur.class.php";

class Cilinder extends Figuur {

    public function __construct($h, $r) {
        parent::__construct($h ,$r);
    }

    public function getH() {
        return $this->x;
    }


    public function getR() {
        return $this->y;
      }

    public function berekenOppervlakte() {
        $oppervlakteTweeCirkels = 2 * parent::$pi * $this->y * $this->y;
        $oppervlakteBuis = 2 * parent::$pi * $this->y * $this->x;
        $oppervlakteCilinder = $oppervlakteTweeCirkels + $oppervlakteBuis;

        return $oppervlakteCilinder;
    
    }
}
