<?php
include_once("../../topo.html");
require_once "class/User.php";

$objUser = new User();
var_dump($objUser);


$objUser->firstName = "Debora";
$objUser->lastName = "Silva";
$objUser->email = "teste@teste.com";


echo "<p>O e-mail de {$objUser->firstName} é {$objUser->email}</p><br><br>";

$objUser->setFirstName("<p>Debora</p>");
echo $objUser->getFirstName();

if (!$objUser->setEmail("cursos@email.com")) {
  echo "<p class='alert alert-danger'>Email inválido</p>";
}