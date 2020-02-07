<?php

class TimeDumper
{

    public function __construct()
    {
        print (new DateTime())->format('Y-m-d');
    }
}


new TimeDumper();
