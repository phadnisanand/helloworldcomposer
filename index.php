<?php

require_once __DIR__ . '/vendor/autoload.php';

use packagistcustom\HelloWorld\Index;

$greeting = new Index();

echo $greeting->greet("Hello Anand");