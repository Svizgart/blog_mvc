<?php

class Toad {
    public $x;
    public $y;
    public $name;
    public $color;
    public $hp;
    public $power    ;

    public function __construct($name) {

        $this->setXY();
        $this->name = $name;
        $this->hp = 100;
        $this->power =5;
    }

    public function move () {

    }

    public function jump() {

    }

    public function strike() {

    }

    public function setXY() {
        $this->x = mt_rand(1, 100);
        $this->y = mt_rand(1, 100);
    }

}