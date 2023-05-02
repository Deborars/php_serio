<?php
session_start();

include_once("connection.php");
include_once("url.php");

if (!empty($_GET['id'])) {

  // retorna de um dado
  $id = $_GET['id'];
  $query = 'SELECT * FROM contacts where id = :id';
  $stmt = $conn->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();
  // By this way you can close connection in PDO.
  $conn = null;
  $contact = $stmt->fetch();
} else {
  // retorna todos os contatos
  $query = 'SELECT * FROM contacts';
  $stmt = $conn->prepare($query);
  $stmt->execute();
  // By this way you can close connection in PDO.
  $conn = null;
  $contacts = $stmt->fetchAll();
}