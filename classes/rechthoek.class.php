<?php

require_once "figuur.class.php";

class Rechthoek extends Figuur {

    public function __construct($x,$y) {
        parent::__construct($x ,$y);
    }

    public function getX() {
        return $this->x;
    }

    public function berekenOppervlakte() {
        $uitkomst = $this->x * $this->y;
        return $uitkomst;
    }
}
