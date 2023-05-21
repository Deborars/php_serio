<?php
require_once("globals.php");
require_once("db.php");
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css"
    integrity="sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--css  -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>

<body>
  <header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">
      <a href="<?= $BASE_URL ?>" class="navbar-brand">
        <img id="logo" src="<?= $BASE_URL ?>img/logo.svg" alt="MovieStar">
        <span id="moviestar-title">MovieStar</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-targer="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
        <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes"
          aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>
      <div class="collapse navbar-collapse" id="navbar"></div>
    </nav>
  </header>


  <!-- bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.js"
    integrity="sha512-L6XANV6sOsx9N9c787eDN1pjB2Pzautd3xDgn4cMKuoleHSuCJi5pCDGPCtwE3Bd4A1Olnr0k0aQXbczYzg+wg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>