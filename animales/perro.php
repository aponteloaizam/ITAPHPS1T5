<?php

include_once "animal.php";

class Perro extends Animal {

    public function sonar(): string {
        return $this->name . ", mi perro, hace guau, guau";
    }

}

?>