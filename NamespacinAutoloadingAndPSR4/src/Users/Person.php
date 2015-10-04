<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 14:06
 */

namespace Acme\Users;

class Person {

    protected $name;


    public function __construct($name){

        $this->name = $name;
    }

}