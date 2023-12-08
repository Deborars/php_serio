<?php
require_once("../db.php");

$acao = $_REQUEST['acao'];
$data = array();

if ($acao == 'buscar') {
  $query = 'SELECT * FROM movies';
  $stmt = $conn->query($query);
  $stmt->execute();

  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

die(json_encode($data));
