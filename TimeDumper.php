<?php 
namespace service;

use DateTime;

class TimeDumper 
{

    public function __construct($format)
    {
        print (new DateTime())->format($format);
    }
}
