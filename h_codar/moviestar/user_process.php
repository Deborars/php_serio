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

  //resgata dados do usuario
  $userData = $userDAO->verifyToken();

  //receber dados do input
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


  //upload da imagem
  if (isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {


    $image = $_FILES["image"];
    $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
    $jpgArray = ["image/jpeg", "image/jpg"];

    //checagem de tipo de imagem
    if (in_array($image["type"], $imageTypes)) {
      //checar se jpg
      if (in_array($image["type"], $jpgArray)) {
        $imageFile = imagecreatefromjpeg($image["tmp_name"]);
        //imagem é png
      } else {
        $imageFile = imagecreatefrompng($image["tmp_name"]);
      }


      $imageName = $user->imageGenerateName();

      imagejpeg($imageFile, "./img/users/" . $imageName, 100);

      $userData->image = $imageName;
    } else {
      $message->setMessage("Tipo de imagem inválida, insira png ou jpg!", "error", "back");
    }
  }


  $userDAO->update($userData);

  //atualizar senha do usuario
} else if ($type === "changepassword") {

  //receber dados do post
  $password = filter_input(INPUT_POST, "password");
  $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

  //resgata dados do usuario
  $userData = $userDAO->verifyToken();
  $id =  $userData->id;

  if ($password == $confirmpassword) {
    //criar um novo objeto de usuario
    $user = new User();

    $finalPassword =  $user->generatePassword($password);

    $user->password = $finalPassword;
    $user->id = $id;

    $userDAO->changePassword($user);
  } else {
    $message->setMessage("As senhas não são iguais!", "error", "back");
  }
} else {
  $message->setMessage("Informações inválidas", "error", "index.php");
}
