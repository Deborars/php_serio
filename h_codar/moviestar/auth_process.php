<?php

require_once("globals.php");
require_once("db.php");
require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);


//resgata o tipo do formulario
$type = filter_input(INPUT_POST, "type");

//verificação do tipo de formulário
//registra o usuario
if ($type === "register") {


  //o filter_input faz um tratamento antes de usar o valor que foi passado
  //é necessário sempre informar o method usado para mandar o dado e a sua chave, parecido com
  //$_POST["name"]
  $name = filter_input(INPUT_POST, "name");
  $lastname = filter_input(INPUT_POST, "lastname");
  $email = filter_input(INPUT_POST, "email");
  $password = filter_input(INPUT_POST, "password");
  $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

  //verificação de dados minimos
  if ($name && $lastname && $email && $password) {
  } else {
    //enviar uma mensagem de erro, dos dados faltantes
    $message->setMessage("Por favor, preencha todos os campos", "error", "back");
  }

  //aqui é a autenticação do usuario
} elseif ($type === "login") {
}