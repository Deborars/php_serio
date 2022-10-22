<?php


/*

RELEMBRANDO ESCOPO E FUNÇÕES

-funcoões quando possuem parametros, os mesmos tem escopo de variaveis locais
só existem dentro delas

-podemos utilizar as variáveis globais com a instrução global;

-e também há o static, onde podemos manter um valor após a execução de uma função, 
o que normalmente é resetado

-no escopo local a variavel é resetada a cada nova chamada
quando você seta numa função como static ela persiste o valor caso ele fique sendo alterado 
*/

$a = 1; // var global

function num()
{
  global $a;

  $a = 10;
  echo $a;
}

// echo "Essa é uma var global " . $a . "<br>";
// echo "<br>Essa é uma variavel local " . num() . ".";

// echo "Essa é uma var global " . $a . "<br>";

function arrays($param)
{
  $novoArray = [];
  if (is_array($param)) {
    foreach ($param as $item) {
      if ($item > 7) {
        array_push($novoArray, $item);
      }
    }
    return $novoArray;
  } else {
    echo "Necessário informar um array de números para executar a função";
  }
}

$var = [1, 10.23, 5, 7, 8];

// var_dump(arrays($var));

// var_dump(arrays("debora"));

//boas praticas: quando for setar uma função com valor default no parametro é aconselhavel
//deixar ele por ultimo, porque imagine a função com dois parametros e recebendo apenas 1, sendo que o 
//primeiro tem um valor default e o segundo não. A função dará erro;

function testando($param1, $param2 = "teste")
{
  echo "O valor do primeiro parametro é: " . $param1 . " e o segundo é " . $param2;
}

// testando("a", "b");
// echo "<br>";
// testando("c");

/*
O valor do primeiro parametro é: a e o segundo é b
O valor do primeiro parametro é: c e o segundo é teste

*/

$produtos = ["sabão", "esponja", "pasta de dente", "alho", "azeite"];

// function produtosArray($arr)
// {
//   return implode(" , ", $arr);
// }

// echo produtosArray($produtos);

function produtosEmString($param)
{

  $string = "";

  for ($i = 0; $i < count($param); $i++) {
    $string .= " $param[$i] ,";
  }

  return $string;
}

// echo produtosEmString($produtos);

/*Retornando multiplos valores*/

function alteraDados($nome, $idade)
{
  $nome = "Sra. $nome";
  $idade = "$idade anos";

  return [$nome, $idade];
}

$dados = alteraDados("Debora", "33");

echo "Olá $dados[0] você tem $dados[1]";