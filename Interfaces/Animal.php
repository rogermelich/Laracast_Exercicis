<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 13:12
 */

interface Animal{

    public function communicate();
}


class Dog implements Animal{

    public function communicate(){

        return 'bark';
    }
}


class Cat implements Animal{

    public function communicate(){

        return 'meow';
    }
}