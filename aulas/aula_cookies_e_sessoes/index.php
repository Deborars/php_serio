<?php

include_once("../topo.html");

echo "<p class='alert alert-success'>Teste</p>";



setcookie("nomeDoCookie", "Esse é meu cookie", time() + 10);

var_dump($_COOKIE);

$time = time() + 60 * 60 * 24 * 7;
$user = [
  "user" => "root",
  "passwd" => "12345",
  "expire" => $time
];

var_dump($user);