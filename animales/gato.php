<?php

include_once "animal.php";

class Gato extends Animal {

    public function sonar(): string {
        return $this->name . ", mi gato, hace miau, miau";
    }

}

?>