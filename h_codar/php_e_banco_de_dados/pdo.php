<?php

$host = "localhost";
$db = "cursophp";
$pass = "";
$user = "root";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$results = $conn->query("SELECT * FROM tb_contatos");




var_dump($results->fetchAll());