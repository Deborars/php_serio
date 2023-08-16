<?php

require_once("globals.php");
require_once("db.php");
require_once("models/Movie.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");

$message = new Message($BASE_URL);
$userDAO = new userDAO($conn, $BASE_URL);
$MovieDAO = new MovieDAO($conn, $BASE_URL);

//resgata o tipo do formulario
$type = filter_input(INPUT_POST, "type");

//resgata dados do usuario
$userData = $userDAO->verifyToken();

if ($type === "create") {

  //receber dados do input
  $title = filter_input(INPUT_POST, "title");
  $description = filter_input(INPUT_POST, "description");
  $trailer = filter_input(INPUT_POST, "trailer");
  $category = filter_input(INPUT_POST, "category");
  $length = filter_input(INPUT_POST, "length");

  $movie = new Movie();

  //validação mínima de dados
  if (!empty($title) && !empty($description) && !empty($category)) {

    $movie->title = $title;
    $movie->description = $description;
    $movie->trailer = $trailer;
    $movie->category = $category;
    $movie->length = $length;
    $movie->users_id = $userData->id;

    //upload de imagem do filme
    //verifico se o files ["image"] foi iniciado e se possui o nome da imagem temporaria
    if (isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {

      $image = $_FILES["image"];
      $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
      $jpgArray = ["image/jpeg", "image/jpg"];

      //checando tipo da imagem
      if (in_array($image["type"], $imageTypes)) {

        //checa se a imagem é jpg
        if (in_array($image["type"], $jpgArray)) {
          $imageFile = imagecreatefromjpeg($image["tmp_name"]);
        } else {
          $imageFile = imagecreatefrompng($image["tmp_name"]);
        }

        //gerando o nome da imagem
        $imageName = $movie->imageGenerateName();

        imagejpeg($imageFile, "./img/movie/" . $imageName, 100);

        // print_r($_POST);
        // print_r($_FILES);
        // exit;

        $movie->image = $imageName;
      } else {
        $message->setMessage("Tipo de imagem inválida, insira png ou jpg!", "error", "back");
      }
    }

    $MovieDAO->create($movie);
  } else {
    $message->setMessage("Você precisa adicionar pelo menos: título, descrição e categoria.", "error", "back");
  }
} else {

  $message->setMessage("Informações inválidas", "error", "index.php");
}
