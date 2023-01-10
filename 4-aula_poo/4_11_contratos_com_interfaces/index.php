<?php

require_once("source/Contracts/UserInterface.php");
require_once("source/Contracts/User.php");

$user = new \Source\Contracts\User("Debora", "Silva", "teset@teste.com");

var_dump($user);