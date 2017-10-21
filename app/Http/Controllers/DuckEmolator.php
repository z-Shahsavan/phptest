<?php
/**
 * Created by PhpStorm.
 * User: Zahra
 * Date: 07/10/2017
 * Time: 09:26 PM
 */

namespace App\Http\Controllers;

use App\DuckFLD0\Duck;

class DuckEmolator
{
    public static function home(){

        $dk[] = DuckEmolator::mallardDuck();
        $dk[] = DuckEmolator::decoyDuck();
        $dk[] = DuckEmolator::rubberDuck();
        $dk[] = DuckEmolator::redHeadDuck();
        $dkarr = array();
        foreach ($dk as $d) {
            $str = $d->getName() . $d->getQuack(). $d->getFly() ;
            $dkarr[]=$str;
        }
        return view('ducks1', compact('dkarr'));
    }
    public static function mallardDuck() {
        return new Duck("Mallard_Duck", " says: Quack! Quack!", 1);
    }

    public static function decoyDuck() {
        return new Duck("Decoy_Duck", " is always silent!", 0);
    }

    public static function rubberDuck() {
        return new Duck("Rubber_Duck", " says: Squeak!", 0);
    }

    public static function redHeadDuck() {
        return new Duck("Red_Head_Duck", " says: Quack! Quack!", 1);
    }
}