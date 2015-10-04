<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 14:08
 */

namespace Acme;

class Staff {

    protected $members = [];


    public function __construct($members = []){

        $this->members = $members;
    }

    public function add(Person $person){

        $this->members[] = $person;
    }

    public function members(){

        return $this->members;
    }
}