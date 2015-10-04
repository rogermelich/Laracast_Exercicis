<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 17:32
 */

class RegisterUser {
    public function execute(array $data, $listener)
    {
        var_dump('Registering the User.');
        $listener->UserRegisterSuccesfully();
    }
}