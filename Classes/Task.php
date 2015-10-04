<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 11:19
 */

class Task {
    public $description;

    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->complete = true;
    }
}

$task = new Task('Learn OOP', 'This is a description');

$task->complete();

var_dump($task->completed);
