<?php

require __DIR__.'/../vendor/autoload.php';

use consumer\TimeConsumer;

// --------------------------------

$timeConsumer = new TimeConsumer();
$timeConsumer->whatsCurrentTime();