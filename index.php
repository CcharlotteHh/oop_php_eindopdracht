<?php

require_once "classes/vierkant.class.php";
require_once "classes/cilinder.class.php";
require_once "classes/figuur.class.php";

// vierkant
$vierkant = new Vierkant(5,0);

echo "<b>Vierkant:</b>" . "<br>";
echo "Breedte & hoogte: ".$vierkant->getX() . "<br>";
echo "Oppervlakte: " . $vierkant->berekenOppervlakte();

// cilinder
