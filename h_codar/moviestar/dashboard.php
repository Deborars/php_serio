<?php

require('templates/header.php');

//verifica se usuario está autenticado
require_once("models/User.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");


$user = new User();
$userDAO = new UserDAO($conn, $BASE_URL);
$movieDAO = new MovieDAO($conn, $BASE_URL);
$userData = $userDAO->verifyToken(true);


$userMovies = $movieDAO->getMoviesByUserId($userData->id);

// var_dump($userMovies);
?>

<div id="main-container" class="container-fluid">
  <h2 class="section-title">Dashboard</h2>
  <p class="section-description">Adicione ou atualize as informações do filme que você adicionou.</p>
  <div class="col-md-12" id="add-movie-container">
    <a href="<?= $BASE_URL ?>newmovie.php" class="btn card-btn">
      <i class="fas fa-plus"></i> Adicionar Filme
    </a>
  </div>
  <div class="col-md-12" id="movies-dashboard">
    <table class="table">
      <thead>
        <th scope="col">#</th>
        <th scope="col">Título</th>
        <th scope="col">Nota</th>
        <th scope="col" class="actions-column">Ações</th>
      </thead>
      <tbody>
        <?php foreach ($userMovies as $movie) { ?>
        <tr>
          <td scope="row"><?= $movie->id ?></td>
          <td><a href="<?= $BASE_URL ?>movie.php?id=<?= $movie->id ?>"
              class="table-movie-title"><?= $movie->title ?></a></td>
          <td><i class="fas fa-star"></i><?= $movie->rating ?></td>
          <td class="actions-column">
            <a href="<?= $BASE_URL ?>editmovie.php?id=<?= $movie->id ?>" class="edit-btn">
              <i class="far fa-edit"></i> Editar
            </a>
            <form action="<?= $BASE_URL ?>movie_process.php" method="POST">
              <input type="hidden" name="type" value="delete">
              <input type="hidden" name="id" value="<?= $movie->id ?>">
              <button type="submit" class="delete-btn">
                <i class="fas fa-times"></i> Deletar
              </button>
            </form>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php require('templates/footer.php') ?>