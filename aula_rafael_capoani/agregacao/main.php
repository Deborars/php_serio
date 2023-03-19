<?php

require_once('Produto.php');
require_once('Carrinho.php');

$p1 = new Produto('Caneta', 3);
$p2 = new Produto('Lapis', 2);

$c1 = new Carrinho();
$c1->adcCarrinho($p1);
$c1->adcCarrinho($p2);

foreach ($c1->getProdutos() as $row) {
  var_dump($row->getDescricao() . ' ' . $row->getValor());
}
