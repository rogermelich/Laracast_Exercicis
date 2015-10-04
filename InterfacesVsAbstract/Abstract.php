<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 12:43
 */

interface Provider {

    public function authorize();
}


abstract class AbstractProvider {

    protected function related(){

    }
}


class FacebookProvider implements  Provider {

    public function authorize(){

        return '';
    }
}