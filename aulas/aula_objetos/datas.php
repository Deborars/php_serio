<?php

// var_dump([date_default_timezone_get()]);

// // date_default_timezone_set('America/Los_Angeles');

// $script_tz = date_default_timezone_get();

// var_dump([date_default_timezone_get()]);


// define("DATE_BR", "d/m/Y H:i:s");

// $DateDebora = new DateTime();

// var_dump($DateDebora);


// date_default_timezone_set('America/Sao_Paulo');

// define("DATE_BR", "d/m/Y H:i:s");

$dateResources = new DateTime("now");

var_dump([
  $dateResources,
  $dateResources->format("DATE_BR")
]);