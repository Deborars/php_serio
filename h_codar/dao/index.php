<?php
include_once("db.php");
include_once("dao/CarDAO.php");

$CarDAO = new CarDAO($conn);
$cars = $CarDAO->findAll();
?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
  <div>
    <label for="brand">Marca</label>
    <input type="text" name="brand" id="brand" placeholder="Insira a marca">
  </div>
  <div>
    <label for="brand">Km</label>
    <input type="text" name="km" id="km" placeholder="Insira a kilometragem">
  </div>
  <div>
    <label for="brand">Cor</label>
    <input type="text" name="color" id="color" placeholder="Insira a cor">
  </div>
  <input type="submit" value="Salvar">
</form>

<ul>
  <?php foreach ($cars as $car) { ?>
  <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> -
    <?= $car->getColor() ?>
  </li>
  <?php } ?>
</ul>