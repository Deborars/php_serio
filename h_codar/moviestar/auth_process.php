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
    if ($password === $confirmpassword) {
      //verificar se o email está cadastrado no sistema, pois ele é a nossa chave primaria
      //responsável por identificar o usuario
      if ($userDAO->findByEmail($email) === false) {

        $user = new User();

        //criação de token e senha
        $userToken = $user->generateToken();
        $finalPassword = $user->generatePassword($password);

        $user->name = $name;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->password = $finalPassword;
        $user->token = $userToken;

        $auth = true;

        $userDAO->create($user, $auth);
      } else {
        //enviar uma mensagem de erro, email existente
        $message->setMessage("Usuário já cadastrado, tente outro e-mail", "error", "back");
      }
    } else {
      //enviar uma mensagem de erro, as senhas não são identicas
      $message->setMessage("As senhas não são iguais.", "error", "back");
    }
  } else {
    //enviar uma mensagem de erro, dos dados faltantes
    $message->setMessage("Por favor, preencha todos os campos", "error", "back");
  }

  //aqui é a autenticação do usuario
} elseif ($type === "login") {
}