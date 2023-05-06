<?php
session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

// modificações do banco
if (!empty($data)) {
  // var_dump($data);
  // exit;

  // criar contato
  if ($data["type"] === "create") {

    $name = $data["name"];
    $phone = $data["phone"];
    $observations = $data["observations"];

    $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":observations", $observations);

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Contato criado";
    } catch (PDOException $e) {
      //erro na conexão
      $error = $e->getMessage();
      echo "Erro: $error";
    }
  } else if ($data["type"] === "edit") {

    $name = $data["name"];
    $phone = $data["phone"];
    $observations = $data["observations"];
    $id = $data["id"];

    $query = "Update contacts set name = :name, phone = :phone, observations = :observations where id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":observations", $observations);
    $stmt->bindParam(":id", $id);

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Contato atualizado!";
    } catch (PDOException $e) {
      //erro na conexão
      $error = $e->getMessage();
      echo "Erro: $error";
    }
  } else if ($data["type"] === "delete") {


    $id = $data["id"];

    $query = "DELETE FROM contacts where id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Contato deletado!";
    } catch (PDOException $e) {
      //erro na conexão
      $error = $e->getMessage();
      echo "Erro: $error";
    }
  }



  // redirect home
  header("Location:" . $BASE_URL . "../index.php");
  // selecção de dados
} else {
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
}

// fechar conexão
$conn = null;
