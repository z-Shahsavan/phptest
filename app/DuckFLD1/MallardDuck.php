<?php
/**
 * Created by PhpStorm.
 * User: Zahra
 * Date: 05/10/2017
 * Time: 02:11 AM
 */

namespace App\DuckFLD1;
use App\DuckFLD1\CommonBehavior;

class MallardDuck implements CommonBehavior, Fly
{
    protected static $name="Mallard_Duck";

    public function sing() {
        return " says: Quack! Quack! ";
    }

    public function getName() {
        return MallardDuck::$name;
    }
}