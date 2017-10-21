<?php

namespace App\PizzaFLD;


class GreekPizza extends Pizza
{
    public function getName() {
        return "Greek";
    }

    public function prepare() {
        return $this->getName() . " pizza is prepared";
    }

    public function box() {
        return $this->getName() . " pizza is boxed";
    }

}
