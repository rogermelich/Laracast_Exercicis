<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 12:01
 */

class Shape {

    protected $length = 4;


    public function getArea(){

        return pow($this->length, 2);
    }
}


class Square extends Shape {

}


class Triangle extends Shape {

    protected $base = 4;


    protected $heigth = 7;


    public function getArea(){

        return .5 * $this->base * $this->heigth;
    }
}

echo (new Square)->getArea(), "\n";

echo (new Triangle)->getArea(), "\n";