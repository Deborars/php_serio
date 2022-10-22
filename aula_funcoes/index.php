<?php


function soma()
{
  echo "oi";
}

// soma();

$arr = ["maçã", "banana", "morango"];

$chama = implode(",", $arr);

// echo ($chama);

function mult()
{
  $a = 2;
  $b = 2;
  $c = 4;
  echo $a * $b * $c;
}

// mult();

function concat($param1, $param2)
{
  echo $param1 . " " . $param2;
}

// concat("Debora", "Silva");

function velocidadeMaxima($param)
{
  if (is_int($param)) {
    echo "A velocidade máxima permitida é " . $param . "<br>";
  } else {
    echo "É necessário digitar uma velocidade com o tipo INT. <br>";
  }
}

// velocidadeMaxima(100);
// velocidadeMaxima("Debora");

function verificaNumero($num)
{
  if ($num % 2 == 0) {
    echo "O número " . $num . " é par <br>";
  } else {
    echo "O número " . $num . " é impar <br>";
  }
}

// verificaNumero(12342);
// verificaNumero(2);

function ponteciacao($num)
{
  return pow($num, 2);
}


// echo ponteciacao(16) . "<br>";
// echo ponteciacao(123) . "<br>";
// echo ponteciacao(2) . "<br>"