<?php
require_once("globals.php");
require_once("db.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");


$message = new Message($BASE_URL);

$flassMessage = $message->getMessage();

if (!empty($flassMessage["msg"])) {
  //limpar a mensagem
  $message->clearMessage();
}

$userDAO = new UserDAO($conn, $BASE_URL);

$userData = $userDAO->verifyToken(false);

// print_r($userData);
// // exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MovieStar</title>
  <link rel="shortcut icon" href="<?= $BASE_URL ?>img/moviestar.ico" type="image/x-icon">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css" />
  <!--font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!--css  -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

</head>

<body>
  <header>
    <nav id="main-navbar" class="navbar navbar-dark bg-dark navbar-expand-lg">
      <a href="<?= $BASE_URL ?>" class="navbar-brand">
        <img src="<?= $BASE_URL ?>img/logo.svg" alt="MovieStar" id="logo">
        <span id="moviestar-title">MovieStar</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <form action="<?= $BASE_URL ?>search.php" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
        <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <?php if ($userData) { ?>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>newmovie.php" class="nav-link"><i class="far fa-plus-square"></i> Incluir Filme</a>
            </li>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>dashboard.php" class="nav-link">Meus Filmes</a>
            </li>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>editprofile.php" class="nav-link bold"><?= $userData->name ?></a>
            </li>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>logout.php" class="nav-link">Sair</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </header>
  <?php if (!empty($flassMessage['msg'])) { ?>
    <!-- precisa colocar o show para aparecer -->
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
      <div class="toast show <?= $flassMessage['type'] ?>" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">Mensagem</strong>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          <p class="me-auto <?= $flassMessage['type'] ?>"><?= $flassMessage['msg'] ?></p>
        </div>
      </div>
    </div>
  <?php } ?>