<?php

abstract class Animal
{
    protected $x;
    protected $y;
    protected $color;
    protected $hp;
    protected $power;

    public function __construct() {
        $this->setXY();
    }

    abstract function move();

    public function getPlace() {
        return $this->x . ' ' . $this->y;
    }

    protected function setXY() {
        $this->x = mt_rand(1, 100);
        $this->y = mt_rand(1, 100);
    }
}

class Toad extends Animal
{
    private $name;

    public function __construct($name, $color = 'White') {

        parent::__construct();

        $this->name = $name;
        $this->hp = 100;
        $this->power = 5;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    public function move () {
        $this->x +=4;
    }

    public function jump() {

    }

    public function strike() {

    }
}

class Mosquito extends Animal
{
    private $trunk; //хобот

    public function __construct() {

        parent::__construct();

        $this->hp = 10;
        $this->power = 1;
        $this->color = 'red';
    }
    public function move() {
        $this->x +=4;
    }

    public function fly() {

    }

    public function bite() {

    }
}

class SuperMosquito extends Mosquito
{
    public function __construct()
    {
        parent::__construct();

        $this->power *= 3;
        $this->color = 'black';
    }
}

$toad2 = new Toad('John');
$toad3 = new Toad('Alex', 'Yellow');

$mosquito1 = new Mosquito();

echo $toad2->getName() . '<br>';
echo $toad2->getPlace() . '<br>';

echo $toad3->getName() . '<br>';
echo $toad3->getPlace() . '<br>';

echo $toad3->move() . '<br>';
echo $toad3->getPlace() . '<br>';