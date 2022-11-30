<?php

require_once __DIR__ . "/source/Interpretation/User.php";


$debora = new \Source\Intepretation\User;

$debora->setFirstName('Debora');

echo 'olá ' . $debora->getFirstName();