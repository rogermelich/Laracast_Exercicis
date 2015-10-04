<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 17:46
 */

class Math {

    public function add(){

        return array_sum(func_get_args());
    }
}

$math = new Math;
var_dump($math->add(1, 2, 3));