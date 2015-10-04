<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 13:36
 */


interface Repository{
    public function save($data);
}


class MongoRepository implements Repository{
    public function save($data){
    }
}

class FileRepository implements Repository{
    public function save($data){
    }
}