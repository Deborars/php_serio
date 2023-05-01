<?php include_once("templates/header.php") ?>
<div class="container">

  <?php if (isset($printMsg) && $printMsg != '') : ?>
  <p id="msg"><?= $printMsg ?></p>
  <?php endif ?>

  <h1 id="main-title">Minha Agenda</h1>
  <?php if (count($contacts) > 0) : ?>
  <p>Tem contatos</p>
  <?php else : ?>
  <p class="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">clique aqui para
      adicionar</a>.</p>
  <?php endif ?>
</div>

<?php include_once("templates/footer.php") ?>