<?php declare(strict_types = 1);

include "triangulo.php";
include "rectangulo.php";
include "circulo.php";

$triangulo = new Triangulo(2,3);
$rectangulo = new Rectangulo(3,5);
$circulo = new Circulo(7);

echo "El área del triángulo es: " . $triangulo->calcularArea() . "\n";
echo "El área del rectángulo es: " . $rectangulo->calcularArea() . "\n";
echo "El área del círculo es: " . $circulo->calcularArea();

?>