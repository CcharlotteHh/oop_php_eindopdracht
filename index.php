<?php

require_once "classes/vierkant.class.php";
require_once "classes/cilinder.class.php";
require_once "classes/figuur.class.php";

// vierkant
$vierkant = new Vierkant(5);

$vierkant->setOmschrijving('dit is een vierkant <br>');
echo $vierkant-> getOmschrijving();

echo "Breedte & hoogte: ".$vierkant->getX() . "<br>";
echo "Oppervlakte: " . $vierkant->berekenOppervlakte(). "<br>";

$cilinder = new Cilinder(10,3);

$cilinder->setOmschrijving('dit is een cilinder <br>');
echo $cilinder-> getOmschrijving();
echo "hoogte: ".$cilinder->getH() . "<br>";
echo "radius: ".$cilinder->getR() . "<br>";
echo "Oppervlakte: " . $cilinder->berekenOppervlakte();
// cilinder
