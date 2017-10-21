<?php

namespace App\PizzaFLD;


class CheesePizza extends Pizza
{
    public function getName() {
        return "Chesse";
    }

    public function prepare() {
        return $this->getName() . " pizza is prepared";
    }

    public function box() {
        return $this->getName() . " pizza is boxed";
    }


}
