<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 11:54
 */
class Mother {

    public function getEyeCount(){

        return 2;
    }
}


class Child extends Mother {
}

(new Child)->getEyeCount();