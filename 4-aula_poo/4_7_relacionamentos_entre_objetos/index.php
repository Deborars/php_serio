<?php

require __DIR__ . "/vendor/autoload.php";

$teste = new Source\Related\Company();

$address = new Source\Related\Address("Rua aqui", 23, "Bloco A");

$teste->boot("Empresa", $address);

var_dump($teste->getAddress()->getStreet());