<?php
namespace Cronos\Consumer;

use Cronos\TimeDumper;

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