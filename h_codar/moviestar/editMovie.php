<?php
require('templates/header.php');
require_once("models/User.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");

$user = new User();
$userDAO = new UserDAO($conn, $BASE_URL);

$userData = $userDAO->verifyToken(true);

$movie;

$movieDAO = new MovieDAO($conn, $BASE_URL);

//pegar o id do filme
$id = filter_input(INPUT_GET, "id");

if (empty($id)) {
  $message->setMessage("O filme não foi encontrado", "error", "index.php");
} else {
  $movie = $movieDAO->findById($id);

  //verifica se o filme existe
  if (!$movie) {
    $message->setMessage("O filme não foi encontrado", "error", "index.php");
  }
}

//checar se o filme tem imagem
if (empty($movie->image)) {
  $movie->image = 'movie_cover.jpg';
}
?>

<div id="main-container" class="container-fluid">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6 offset-md-1">
        <h1><?= $movie->title ?></h1>
        <p class="page-description">Altere os dados do filme no formulário abaixo:</p>
        <form id="edit-movie-form" action="<?= $BASE_URL ?>movie_process.php" method="POST"
          enctype="multipart/form-data">
          <input type="hidden" name="type" value="update">
          <input type="hidden" name="id" value="<?= $movie->id ?>">
          <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" value="<?= $movie->title ?>" class="form-control" id="title" name="title"
              placeholder="Digite o título do seu filme">
          </div>
          <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" class="form-control" id="image" name="image">
          </div>
          <div class="form-group">
            <label for="length">Duração:</label>
            <input type="text" value="<?= $movie->length ?>" class="form-control" id="length" name="length"
              placeholder="Digite a duração do filme">
          </div>
          <div class="form-group">
            <label for="category">Categoria:</label>
            <select class="form-control" name="category" id="category">
              <option value="">Selecione</option>
              <option value="Ação" <?= $movie->category == "Ação" ? "selected" : "" ?>>Ação</option>
              <option value="Drama" <?= $movie->category == "Drama" ? "selected" : "" ?>>Drama</option>
              <option value="Comédia" <?= $movie->category == "Comédia" ? "selected" : "" ?>>Comédia</option>
              <option value="Romance" <?= $movie->category == "Romance" ? "selected" : "" ?>>Romance</option>
            </select>
          </div>
          <div class="form-group">
            <label for="trailer">Trailer:</label>
            <input type="text" value="<?= $movie->trailer ?>" class="form-control" id="trailer" name="trailer"
              placeholder="Insira o link do trailer">
          </div>
          <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" rows="5" class="form-control"
              placeholder="Descreva o filme..."><?= $movie->description ?></textarea>
          </div>
          <input type="submit" value="Alterar filme" class="mb-3 btn card-btn">
        </form>
      </div>
      <div class="col-md-3">
        <div class="movie-image-container"
          style="background-image: url('<?= $BASE_URL ?>img/movies/<?= $movie->image ?>');"></div>
      </div>
    </div>
  </div>
</div>


<?php require('templates/footer.php') ?>