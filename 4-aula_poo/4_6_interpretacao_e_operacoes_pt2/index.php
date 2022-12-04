<?php

require_once __DIR__ . "/vendor/autoload.php";
// include_once __DIR__ . "/source/topo.html";


$teste = new \Source\Intepretation\Product();

$teste->handler('Debora', 1.99);

$teste->title = "oi";


var_dump($teste);

$teste->company = "oi";