<?php
namespace App\PizzaFLD;


abstract class Pizza
{
    abstract public function getName();

    // these 2 functions have to define for all Pizza child
    abstract public function prepare();

    abstract public function box();

    // these 2 functions have same functionality for all pizaa type
    public function bake($pizzaType) {
        return $pizzaType . " pizza is baked";
    }

    public function cut($pizzaType) {
        return $pizzaType . " pizza is cutted";
    }

}
