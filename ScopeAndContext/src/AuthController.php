<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 17:06
 */

class AuthController{

    protected $registration;


    public function __construct(RegisterUser $registration){

        $this->registration = $registration;
    }


    public function register(){

        $this->registration->execute([], $this);
    }


    public function UserRegisterSuccesfully(){

        var_dump('Created Succesfully. Redirect somewhere.');
    }


    public function UserRegisterFailed(){

        var_dump('Created unsuccesfully. Redirect back.,');
    }
}