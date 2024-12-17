<?php

include_once "forma.php";

class Circulo implements Forma {

    public float $radio;

    public function __construct(float $radio) {
        $this->radio = $radio;
    }

    public function calcularArea(): float {
        return round((pi() * pow($this->radio, 2)),2,PHP_ROUND_HALF_UP);
    }

}

?>