<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 4/10/15
 * Time: 14:10
 */

use Acme\Users\Person;
use Acme\Bussines;
use Acme\Staff;

$jeffrey = new Person('jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Bussines($staff);

$laracasts->hire(new Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());