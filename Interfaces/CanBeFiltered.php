<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 13:41
 */

interface CanBeFiltered{
    public function filter();
}

class Favorited implements CanBeFiltered {
    public function filter(){

    }
}

class Unwatche implements CanBeFiltered {
    public function filter(){

    }
}

class Dificulty implements CanBeFiltered {
    public function filter(){

    }
}