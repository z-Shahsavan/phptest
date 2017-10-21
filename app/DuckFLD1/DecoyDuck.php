<?php
/**
 * Created by PhpStorm.
 * User: Zahra
 * Date: 05/10/2017
 * Time: 02:09 AM
 */

namespace App\DuckFLD1;


class DecoyDuck implements CommonBehavior
{
    protected static $name="Decoy_Duck";

    public function getName() {
        return DecoyDuck::$name;
    }

    public function sing() {
        return " is always silent!";
    }
}