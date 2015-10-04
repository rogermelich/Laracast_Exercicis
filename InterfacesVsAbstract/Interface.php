<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 12:37
 */

interface Provider {

    public function authorize();
}


function login(provider $provider){
    $provider->authorize();
}

Auth::attempt();