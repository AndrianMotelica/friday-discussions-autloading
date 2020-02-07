<?php
namespace consumer;

use service\TimeDumper;

class TimeConsumer
{

    public function whatsCurrentTime()
    {
        return new TimeDumper('H:i:s');
    }

    public function whatsCurrentDate()
    {
        return new TimeDumper('d/m/Y');
    }
}