<?php

require __DIR__.'/vendor/autoload.php';

use Staticus\Staticus;

$staticus = new Staticus(dirname(__FILE__));
$staticus->build();
