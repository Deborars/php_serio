<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// $q = "Create table teste (nome varchar(100), sobrenome varchar(100))";

// $q = 'INSERT INTO tb_contatos (nome) values ("Italo") ';

// $q = 'SELECT * FROM tb_contatos';

// $results = $conn->query($q);

// $conn->close();

// //um resultado
// // $nome = $results->fetch_assoc();

// //todos os resultados
// $nomes = $results->fetch_all();

// var_dump($nomes);

// $nome = "Tadeu";

// $stmt = $conn->prepare("INSERT INTO tb_contatos (nome) value (?)");
// $stmt->bind_param("s", $nome);
// $stmt->execute();
// $conn->close();

$id = 2;

$q = "SELECT * FROM tb_contatos WHERE id > ?";
$stmt = $conn->prepare($q);
$stmt->bind_param('i', $id);
$stmt->execute();
$data = $stmt->get_result();
// $results = $data->fetch_all();
var_dump($data);