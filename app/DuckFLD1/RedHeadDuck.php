<?php
/**
 * Created by PhpStorm.
 * User: Zahra
 * Date: 05/10/2017
 * Time: 02:18 AM
 */

namespace App\DuckFLD1;


class RedHeadDuck implements Fly,CommonBehavior
{
    protected static $name="Red_head_Duck";

    public function getName() {
        return RedHeadDuck::$name;
    }

    public function sing() {
        return " says: Quack! Quack!";
    }
}