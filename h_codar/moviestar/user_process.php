<?php

require_once("globals.php");
require_once("db.php");
require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);

$userDAO = new userDAO($conn, $BASE_URL);

//resgata o tipo do formulario
$type = filter_input(INPUT_POST, "type");

//atualizar usuario
if ($type === "update") {


  $userData = $userDAO->verifyToken();

  //receber dados do post
  $name = filter_input(INPUT_POST, "name");
  $lastname = filter_input(INPUT_POST, "lastname");
  $email = filter_input(INPUT_POST, "email");
  $bio = filter_input(INPUT_POST, "bio");

  //criar um novo objeto de usuario
  $user = new User();

  //preencher os dados do usuario
  $userData->name = $name;
  $userData->lastname = $lastname;
  $userData->email = $email;
  $userData->bio = $bio;

  $userDAO->update($userData);

  //atualizar senha do usuario
} else if ($type === "changepassword") {
} else {
  $message->setMessage("Informações inválidas", "error", "index.php");
}
