<?php
/**
 * Created by PhpStorm.
 * User: Zahra
 * Date: 12/10/2017
 * Time: 01:55 PM
 */

namespace App\DuckFLD1;


class RubberDuck implements CommonBehavior
{
    protected static $name="Rubber_Duck";

    public function sing() {
        return " says: Squeak! ";
    }

    public function getName() {
        return RubberDuck::$name;
    }
}