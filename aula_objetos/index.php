<?php


$variavel = [
  "nome" =>  "Debora",
  "idade" => 33,
  "email" => "debora@teste.com"
];

//transformando um objeto em array
$varObj = (object)$variavel;

print_r($variavel);
echo "<br>";
print_r($varObj);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "Eu {$variavel['nome']} estou acessando um indice do array";
echo "<br>";
echo "Eu {$varObj->nome} estou acessando a propriedade de um objeto";

unset($varObj->email);

var_dump($varObj);