<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 13:17
 */

interface Logger{

    public function execute($message);
}


class LogToFile implements Logger{


    public function execute($message){

        var_dump('log the message to a file:' . $message);
    }
}


class LogToDatabase implements Logger{
    public function execute($message){

        var_dump('log the message to a DataBase:' . $message);
    }
}
//...

class UserController{

    protected $logger;


    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }


    public function show(){

        $user = 'John Doe';
        $this->logger->execute($user);
    }
}

$controller = new UserController(new LogToDatabase);
$controller->show();