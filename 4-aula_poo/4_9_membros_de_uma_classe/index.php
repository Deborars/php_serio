<?php

require_once("source/Members/Config.php");

use Source\Members\Config;

$config = new Config();

echo "<p>" . $config::COMPANY . "</p>";

var_dump([
  Config::COMPANY
  // Config::DOMAIN,
  // Config::SECTOR
]);

// var_dump($config);

$refletion = new ReflectionClass(Config::class);
var_dump($refletion->getConstants(), $refletion->getProperties());


$config::setConfig("xxxx", "", "");
Config::setConfig("Upside", "upside.com.br", "Educação");

var_dump($config, $refletion->getMethods(), $refletion->getDefaultProperties());