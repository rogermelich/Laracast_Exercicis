<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 17:56
 */

class Person{

    public $age = 1;


    public function haveBirthday(){

        $this->age += 1;
    }


    public function age(){

        return $this->age;
    }
}

$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();
echo $joe->age(), "\n";
$jane = new Person;
$jane->haveBirthday();
echo $jane->age(), "\n";