<?php

require('templates/header.php');


require_once("models/Movie.php");
require_once("dao/MovieDAO.php");
require_once("dao/ReviewDAO.php");


//pegar o id do filme
$id = filter_input(INPUT_GET, "id");

$movie;

$movieDAO = new MovieDAO($conn, $BASE_URL);
$reviewDAO = new ReviewDAO($conn, $BASE_URL);

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

// checar se o filme é do usuário
$userOwnsMovie = false;

if (!empty($userData)) {

  if ($userData->id === $movie->users_id) {
    $userOwnsMovie = true;
  }
}


//resgatar as reviews do filme
$movieReviews = $reviewDAO->getMoviesReview($id);


$alreadyReviewed = $reviewDAO->hasAlreadyReviewed($id, $userData->id);
?>

<div id="main-container" class="container-fluid">
  <div class="row">
    <div class="offset-md-1 col-md-6 movie-container">
      <h1 class="page-title"><?= $movie->title ?></h1>
      <p class="movie-details">
        <span>Duração: <?= $movie->length ?></span>
        <span class="pipe"></span>
        <span><?= $movie->category ?></span>
        <span class="pipe"></span>
        <span><i class="fas fa-star"></i> <?= $movie->rating ?></span>
      </p>
      <iframe width="560" height="315" src="<?= $movie->trailer ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; " allowfullscreen></iframe>
      <p><?= $movie->description ?></p>
    </div>
    <div class="col-md-4">
      <div class="movie-image-container" style="background-image: url('<?= $BASE_URL ?>/img/movies/<?= $movie->image ?>');"></div>
    </div>
    <div class="offset-md-1 col-md-10" id="reviews-container">
      <h3 id="reviews-title">Avaliações:</h3>
      <!--verifica se habilita a review para o usuário ou não-->
      <?php if (!empty($userData) && !$userOwnsMovie && !$alreadyReviewed) { ?>
        <div class="col-md-12" id="review-form-container">
          <h4>Envie sua avaliação:</h4>
          <p class="page-description">Preencha o formulário com a nota e comentário sobre o filme</p>
          <form action="<?= $BASE_URL ?>review_process.php" method="POST" id="review-form">
            <input type="hidden" name="type" value="create">
            <input type="hidden" name="movies_id" value="<?= $movie->id ?>">
            <div class="form-group">
              <label for="rating">Nota do filme:</label>
              <select name="rating" id="rating" class="form-control">
                <option value="">Selecione</option>
                <option value="10">10</option>
                <option value="9">9</option>
                <option value="8">8</option>
                <option value="7">7</option>
                <option value="6">6</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div>
            <div class="form-group">
              <label for="review">Seu comentário:</label>
              <textarea name="review" id="review" rows="3" class="form-control" placeholder="O Que você achou do filme?"></textarea>
            </div>
            <input type="submit" class="btn card-btn" value="Enviar comentário">
          </form>
        </div>
      <?php } ?>
      <!--Comentários -->
      <?php foreach ($movieReviews as $review) { ?>
        <?php require("templates/user_review.php") ?>
      <?php } ?>
      <?php if (count($movieReviews) == 0) { ?>
        <p class="empty-list">Ainda não existem comentários para este filme.</p>
      <?php } ?>
    </div>

  </div>
</div>

<?php require('templates/footer.php'); ?>