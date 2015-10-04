<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 17:27
 */

require "src/AuthController.php";

require "src/RegisterUser.php";

$registration = new RegisterUser();
$authController = new AuthController($registration);

$authController->register();