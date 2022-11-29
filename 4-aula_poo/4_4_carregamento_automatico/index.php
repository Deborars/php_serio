<?php

require("../../topo.html");

// require __DIR__ . "/source/Loading/User.php";
// require __DIR__ . "/source/Loading/Company.php";
// require __DIR__ . "/source/Loading/Address.php";

require "./source/autoload.php";


$user = new \Source\Loading\User();
$address = new \Source\Loading\Address();
$company = new \Source\Loading\Company();