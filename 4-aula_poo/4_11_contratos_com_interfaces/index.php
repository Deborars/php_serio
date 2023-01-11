<?php

require_once("source/Contracts/UserInterface.php");
require_once("source/Contracts/User.php");
require_once("source/Contracts/UserErrorInterface.php");
require_once("source/Contracts/UserAdmin.php");
require_once("source/Contracts/Login.php");

$user = new \Source\Contracts\User("Debora", "Silva", "teset@teste.com");

$admin = new \Source\Contracts\UserAdmin("Debora", "Silva", "teset@teste.com");

// var_dump($user, $admin);

$login = new \Source\Contracts\Login();

$loginAdmin = $login->loginAdmin($admin);

var_dump($loginAdmin);