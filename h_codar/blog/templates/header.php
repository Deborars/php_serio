<!DOCTYPE html>
<?php
include("helpers/url.php");
include("data/post.php");
include("data/categories.php");
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="">
    </a>

    <nav>
      <ul id="navbar">
        <li><a class="nav-link" href="<?= $BASE_URL ?>">Home</a></li>
        <li><a class="nav-link" href="#">Categorias</a></li>
        <li><a class="nav-link" href="#">Sobre</a></li>
        <li><a class="nav-link" href="<?= $BASE_URL ?>/contato.php">Contato</a></li>
      </ul>
    </nav>
  </header>