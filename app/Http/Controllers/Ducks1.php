<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DuckFLD1\MallardDuck;
use App\DuckFLD1\RedHeadDuck;
use App\DuckFLD1\RubberDuck;
use App\DuckFLD1\DecoyDuck;
use App\DuckFLD1\Fly;

class Ducks1 extends Controller
{

    public static function duckEmolator()
    {
        $dk = array(new MallardDuck(),
            new DecoyDuck(),
            new RubberDuck(),
            new RedHeadDuck());
        $dkarr = array();
        foreach ($dk as $d) {
            $str = $d->getName() . "  " . $d->sing();
            if ($d instanceof Fly) {
                $str .= " And is flying";
            }else{
                $str .= " And can't fly!";
            }
            $dkarr[]=$str;
        }
        return view('ducks1', compact('dkarr'));
    }
}


