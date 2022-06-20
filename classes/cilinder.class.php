<?php 

require_once "figuur.class.php";

class Cilinder extends Figuur {
  public $h;
  public $r;

  public function __construct($h,$r) {
    parent::__construct($h,$r);
}

  public function getH() {
    return $this->h;
  }

  public function getR() {
    return $this->r;
  }

  public function berekenOppervlakte() {
    $oppervlakteTweeCirkels = 2 * $this->pi * $this->r * $this->r;
    $oppervlakteBuis = 2 * $this->pi * $this->r * $this->h;
    $oppervlakteCilinder = $oppervlakteTweeCirkels + $oppervlakteBuis;

    return $oppervlakteCilinder;
  }
}
