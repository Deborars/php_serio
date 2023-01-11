<?php

require_once("source/Traits/User.php");
require_once("source/Traits/UserTrait.php");
require_once("source/Traits/Address.php");
require_once("source/Traits/AddressTrait.php");
require_once("source/Traits/Register.php");

$user = new \Source\Traits\User("Robson", "Leite", "curso@curso");
$address = new \Source\Traits\Address("Rua aqui", "23", "bloco b");

$register = new \Source\Traits\Register($user, $address);

var_dump($register);