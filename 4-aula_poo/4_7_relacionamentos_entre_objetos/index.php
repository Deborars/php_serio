<?php

require __DIR__ . "/vendor/autoload.php";

$teste = new Source\Related\Company();

$teste->bootCompany("teste", "Rua aqui");

var_dump($teste);