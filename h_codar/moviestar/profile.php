<?php
require('templates/header.php');


require_once("models/User.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");

$user = new User();
$userDAO = new UserDAO($conn, $BASE_URL);
$movieDAO = new MovieDAO($conn, $BASE_URL);

//Receber id do usuario
$id = filter_input(INPUT_GET, "id");

//verifica se o id virá na url se não vir, irá verificar se tem o id do ususario logado com o userdata
//se não tiver é porque tem algo errado.
if (empty($id)) {
  if (!empty($userData)) {
    $id = $userData->id;
  } else {
    $message->setMessage("Usuário não encontrado!", "error", "index.php");
  }
} else {

  $userData = $userDAO->findById($id);

  //se não encontrar o usuario

  if (!$userData) {
    $message->setMessage("Usuário não encontrado!", "error", "index.php");
  }
}


$fullName = $user->getFullName($userData);

if ($userData->image == "") {
  $userData->image = "user.png";
}

//Filmes que o usuario adicionou
$userMovies = $movieDAO->getMoviesByUserId($id);



?>

<div id="main-container" class="container-fluid">
  <div class="col-md-8 offset-md-2">
    <div class="row profile-container">
      <div class="col-md-12 about-container">
        <h1 class="page-title"><?= $fullName ?></h1>
        <div id="profile-image-container"
          style="background-image: url('<?= $BASE_URL ?>/IMG/USERS/<?= $userData->image ?>')"></div>
        <h3 class="about-title">Sobre:</h3>
        <?php if (!empty($userData->bio)) { ?>
        <p class="profile-description"><?= $userData->bio ?></p>
        <?php } else { ?>
        <p class="profile-description">O usuário ainda não possui uma bio!</p>

        <?php } ?>
      </div>
      <div class="col-md-12 added-movies-container">
        <h3>Filmes que enviou:</h3>
        <div class="movies-container">
          <?php foreach ($userMovies as $movie) { ?>
          <?php require("templates/cards.php") ?>
          <?php } ?>
          <?php if (count($userMovies) === 0) { ?>
          <p class="empty-list">O usuário não adicionou filmes.</p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require('templates/footer.php'); ?>