<?php

class Figuur
{
  public $pi = 3.1415;
  protected $x;
  protected $y;
  private $omschrijving = "";

  public function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  public function setX($x)
  {
    $this->x = $x;
  }

  public function setY($y)
  {
    $this->y = $y;
  }

  public function setOmschrijving($omschrijving)
  {
    $this->omschrijving = $omschrijving;
  }

  public function getOmschrijving()
  {
    return $this->omschrijving;
  }

  public function berekenOppervlakte()
  {
    $uitkomst = $this->x * $this->y;
    return $uitkomst;
  }
}
