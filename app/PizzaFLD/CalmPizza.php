<?php

namespace App\PizzaFLD;


class CalmPizza extends Pizza
{
    public function getName() {
        return "Calm";
    }

    public function prepare() {
        return $this->getName() . " pizza is prepared";
    }

    public function box() {
        return $this->getName() . " pizza is boxed";
    }
}
