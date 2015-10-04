<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 14:08
 */

namespace Acme;

use Acme\Users\Person;

class Bussines {

    protected $staff;


    public function __construct(Staff $staff){

        $this->staff = $staff;
    }


    public function hire(Person $person){

        $this->staff->add($person);
    }


    public function getStaffMembers(){

        return $this->staff->members();
    }
}
