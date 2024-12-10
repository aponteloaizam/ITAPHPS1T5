<?php declare(strict_types = 1);

include "perro.php";
include "gato.php";

$perro = new Perro("Milú");
$gato = new Gato("Félix");

echo $perro->sonar() . "\n";
echo $gato->sonar() . "\n";

?>