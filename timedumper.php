<?php 
namespace service;

use DateTime;

class TimeDumper 
{

    public function __construct()
    {
        print (new DateTime())->format('Y-m-d');
    }
}
