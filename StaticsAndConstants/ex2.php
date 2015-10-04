<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 17:51
 */

class Math2 {

    public static function add(...$nums){

        return array_sum($nums);
    }
}

echo Math2::add(1, 2, 3);class Math {

    public static function add(...$nums)    {

        return array_sum($nums);
    }
}

echo Math::add(1, 2, 3);