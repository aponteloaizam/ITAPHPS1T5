<?php

include_once "forma.php";

class Rectangulo implements Forma {

    public float $alto;
    public float $ancho;

    public function __construct(float $alto, float $ancho) {
        $this->alto = $alto;
        $this->ancho = $ancho;
    }

    public function calcularArea(): float {
        return $this->alto * $this->ancho;
    }

}

?>