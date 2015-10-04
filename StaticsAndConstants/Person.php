<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 17:52
 */

class Person{

    public static $age = 1;


    public function haveBirthday(){

        static::$age +=1;
    }
}

$joe = new Person;
$joe->haveBirthday();
$jane = new Person;
$jane->haveBirthday();

echo Person::$age;