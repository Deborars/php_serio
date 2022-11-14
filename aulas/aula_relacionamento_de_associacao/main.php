<?php

require_once 'ContaBancaria.php';
require_once 'Pessoa.php';

$c = new ContaBancaria(123, 456, 232322);

echo $c->getContaBancaria();

$p = new Pessoa("Debora", $c);

var_dump($p);

echo $p->getConta()->getContaBancaria();