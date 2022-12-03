<?php

require_once __DIR__ . "/source/Interpretation/User.php";


$debora = new \Source\Intepretation\User('Debora', 'Silva', 'email@email.com');
$ester =  clone ($debora);

$ester->setFirstName = 'Ester';
$ester->setLastName = 'Israel';

var_dump([$debora, $ester]);