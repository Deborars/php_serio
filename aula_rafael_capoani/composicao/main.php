<?php

require_once('game.php');
require_once('videogame.php');


$v = new VideoGame();
$v->adcGame("Mario Kart");

var_dump($v);
