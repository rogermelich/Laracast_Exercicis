<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 13:28
 */

interface CastsToJson{
    public function toJson();
}


class User implements CastsToJson{}
Class Collection implements CastsToJson{}
