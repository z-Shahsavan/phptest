<?php

namespace App\DuckFLD0;

class Duck
{
    private $name;
    private $quack;
    private $fly;

    function __construct($name, $quack, $fly) {
        $this->name = $name;
        $this->quack = $quack;
        $this->fly = $fly;
    }

    public function getName() {
        return $this->name;
    }

    public function getQuack() {
        return $this->quack;
    }

    public function getFly() {
        if ($this->fly == 0) {
            return " And can't fly!";
        } else {
            return " And is flying.";
        }
    }
}