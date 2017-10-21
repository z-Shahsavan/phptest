<?php

namespace App\PizzaFLD;


class PepperoniPizza extends Pizza
{
    public function getName() {
        return "Pepperoni";
    }

    public function prepare() {
        return $this->getName() . " pizza is prepared";
    }

    public function box() {
        return $this->getName() . " pizza is boxed";
    }

}
