<?php

require_once "classes/vierkant.class.php";
require_once "classes/cilinder.class.php";
require_once "classes/figuur.class.php";
require_once "classes/rechthoek.class.php";

// vierkant
$vierkant = new Vierkant(5);
$vierkant->setOmschrijving('dit is een vierkant <br>');
echo $vierkant-> getOmschrijving();
echo "Breedte & hoogte: ".$vierkant->getX() . "<br>";
echo "Oppervlakte: " . $vierkant->berekenOppervlakte(). "<br>";

// cilinder
$cilinder = new Cilinder(10,3);
$cilinder->setOmschrijving('dit is een cilinder <br>');
echo $cilinder-> getOmschrijving();
echo "hoogte: ".$cilinder->getH() . "<br>";
echo "radius: ".$cilinder->getR() . "<br>";
echo "Oppervlakte: " . $cilinder->berekenOppervlakte(). "<br>";

//rechthoek
$rechthoek = new Rechthoek(5,3);
$rechthoek->setOmschrijving('dit is een rechthoek <br>');
echo $rechthoek-> getOmschrijving();
echo "Breedte & hoogte: ".$rechthoek->getX() . "<br>";
echo "Oppervlakte: " . $rechthoek->berekenOppervlakte(). "<br>";