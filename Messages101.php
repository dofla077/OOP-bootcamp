<?php

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);
$laracasts->hire(new Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());