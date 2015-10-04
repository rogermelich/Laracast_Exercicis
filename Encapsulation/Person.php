<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 12:25
 */

class Person {

    public $name;

    public $age;


    public function __construct($name) {

        $this->name = $name;
    }


    public function getAge($age){

        return $this->age * 365;
    }


    public function setAge($age){

        if ($age < 18){

            throw new Exception ("Es menor d'edat");
        }

        $this->age = $age;
    }
}

$john = new Person('John Doe');

$john->setAge(30);

$john->age = 3;

var_dump($john->getAge());