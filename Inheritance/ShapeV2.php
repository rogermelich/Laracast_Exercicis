<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 12:08
 */


abstract class Shape {

    protected $color;


    public function __construct($color = 'red') {

        $this->color = $color;
    }


    public function getColor(){

        return $this->color;
    }


    abstract protected function getArea();
}


class Square extends Shape {

    protected $length = 4;

    public function getArea(){

        return pow($this->length, 2);
    }
}

class Triangle extends Shape {

    protected $base = 4;

    protected $heigth = 7;

    public function getArea(){

        return .5 * $this->base * $this->heigth;
    }
}


class Circle extends Shape {

    protected $radi = 5;

    public function getArea(){

        return M_PI * pow($this->radi, 2);
    }
}

$circle = new Circle();

echo  $circle->getArea(), "\n";