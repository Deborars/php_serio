<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

<?php

require_once("source/Members/Config.php");
require_once("source/Members/Trigger.php");

use Source\Members\Config;

$config = new Config();

// echo "<p>" . $config::COMPANY . "</p>";

// var_dump([
//   Config::COMPANY
//   // Config::DOMAIN,
//   // Config::SECTOR
// ]);

// var_dump($config);

// $refletion = new ReflectionClass(Config::class);
// var_dump($refletion->getConstants(), $refletion->getProperties());


// $config::setConfig("xxxx", "", "");
// Config::setConfig("Upside", "upside.com.br", "Educação");

// var_dump($config, $refletion->getMethods(), $refletion->getDefaultProperties());

$obj = new \Source\Members\Trigger();

echo $obj->show("oi");
echo $obj->show("oi", "WARNING");
echo $obj->show("oi", "DANGER");