<?php

$file = __DIR__ . "/new_file.txt";

echo $file;

echo '<br>';

if (file_exists($file) && is_file($file)) {
  echo "Existe";
} else {
  echo "Não existe";
}

echo '<br>';

/*php_eol permite que você pule uma linha e comece uma nova e cada um separa a informação num index de array*/
if (!file_exists($file) || !is_file($file)) {
  $fileOpen = fopen($file, "w");
  fwrite($fileOpen, "primeira linha" . PHP_EOL);
  fwrite($fileOpen, "segunda linha" . PHP_EOL);
  fwrite($fileOpen, "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book." . PHP_EOL);
  fclose($fileOpen);
} else {
  /**o array file mostra o que tem dentro do arquivo e o pathinfo mostra informações sobre o arquivo */
  var_dump(file($file), pathinfo($file));
}

$open = fopen($file, "r");

//feof enquanto não chegar ao final da linha do arquivo
while (!feof($open)) {
  echo '<p>' . fgets($open) . '</p>';
}

$getContents = __DIR__ . 'test2.txt';

//file_get_contents pega o valor do arquivo se o arquivo existir
//file_put_contents cria um arquivo e o segundo parametro é a informação que vai nele

if (file_exists($getContents) && is_file($getContents)) {
  echo file_get_contents($getContents);
} else {
  $data = "oioiiioo";
  file_put_contents($getContents, $data);
  echo file_get_contents($getContents);
}

//apaga o arquivo, a boa prática pede que fala uma verificação se o arquivo existe antes
// unlink($getContents);