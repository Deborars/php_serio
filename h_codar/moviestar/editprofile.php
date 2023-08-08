<?php
require('templates/header.php');
require_once("models/User.php");
require_once("dao/UserDAO.php");

$user = new User();
$userDAO = new UserDAO($conn, $BASE_URL);

$userData = $userDAO->verifyToken(true);

$fullName = $user->getFullName($userData);

if ($userData->image == "") {
  $userData->image = "user.png";
}
?>



<div id="main-container" class="container-fluid">
  <div class="col-md-12">
    <form action="<?= $BASE_URL ?>user_process.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="type" value="update">
      <div class="row">
        <div class="col-md-4">
          <h1><?= $fullName ?></h1>
          <p class="page-description">Altere seus dados no formulário abaixo:</p>
          <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o seu nome"
              value="<?= $userData->name ?>">
          </div>
          <div class="form-group">
            <label for="lastname">Sobrenome:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite o seu sobrenome"
              value="<?= $userData->lastname ?>">
          </div>
          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control disabled" id="email" name="email" placeholder="Digite o seu email"
              value="<?= $userData->email ?>">
          </div>
          <input type="submit" class="btn form-btn" value="Alterar">
        </div>
        <div class="col-md-4">
          <div id="profile-image-container"
            style="background-image: url('<?= $BASE_URL ?>/IMG/USERS/<?= $userData->image ?>')"></div>
          <div class="form-group">
            <label for="image">Foto:</label><br>
            <input type="file" name="image" id="image" class="form-control-file">
          </div>
          <div class="form-group">
            <label for="bio">Sobre você:</label>
            <textarea class="form-control" name="bio" id="bio" rows="5"
              placeholder="Conte quem você é, o que faz e onde trabalha..."><?= $userData->bio ?></textarea>
          </div>

        </div>
      </div>
    </form>
  </div>
</div>

<?php require('templates/footer.php') ?>