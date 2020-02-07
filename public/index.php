<?php

require __DIR__.'/../vendor/autoload.php';

use Cronos\Consumer\TimeConsumer;

// --------------------------------

$timeConsumer = new TimeConsumer();
$timeConsumer->whatsCurrentTime();