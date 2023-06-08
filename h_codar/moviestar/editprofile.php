<?php
require('templates/header.php');
require_once("dao/UserDAO.php");

$userDAO = new UserDAO($conn, $BASE_URL);

$userData = $userDAO->verifyToken(true);

?>



<div id="main-container" class="container-fluid">
  <h1>Edição do Perfil</h1>
</div>

<?php require('templates/footer.php') ?>