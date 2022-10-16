<?php

$folder = __DIR__ . '/uploads';


//mkdir recebe dois argumentos um é uma string dizendo qual será o caminho da pasta e seu nome, o outro o mode que informa que tipo de permissão a pasta terá
// if (!file_exists($folder) && !is_dir($folder)) {
//   mkdir($folder, 0755);
//   echo 'pasta criada';
// } else {
//   echo 'pasta já existe';
//   var_dump(scandir($folder));
//   //scandir abre o diretorio e mostra para você o que tem dentro dele através de um array
//   //array(3) { [0]=> string(1) "." [1]=> string(2) ".." [2]=> string(9) "teste.txt" }
// }

// $arquivo = $folder . "/teste.txt";

// $abreArquivo = fopen($arquivo, "w");
// fwrite($abreArquivo, "oláaaa");
// fclose($abreArquivo);

$file = 'file.txt';

//verifico se o arquivo existe se não, então, eu crio 
//arquivo existe, agora eu copio ele na pasta upload

// if (!file_exists($file) || !is_file($file)) {
//   fopen($file, "w");
//   echo "arquivo criado";
// } else {
//   copy($file, $folder . "/" . basename($file));
//   echo "arquivo salvo na pasta upload";
//   var_dump([filemtime($file), filemtime($folder . "/" . basename($file))]);
// }


//array_diff verifica a partir do primeiro array quais entradas do primeiro não tem no segundo
//e com a print eu mostro quais são elas
// $array2 = array("a" => "verde", "vermelho", "azul", "vermelho");
// $array1 = array("b" => "verde", "amarelo", "vermelho");
// $result = array_diff($array1, $array2);

// print_r($result);


$dirRemove = __DIR__ . "/remove";
$dirFiles = array_diff(scandir($dirRemove), [".", ".."]);
$dirCount = count($dirFiles);

// var_dump($dirCount);

//para codificar a deleção de uma pasta é necessário verificar antes se nesta pasta
//existe arquivos porque só quando está vazia podemos deleta-la.

//esse if verifica a quantidade de arquivos dentro da pasta
if ($dirCount >= 1) {
  echo "<h2>Clear...</h2>";
  foreach (scandir($dirRemove) as $fileItem) {
    $fileItem = __DIR__ . "/remove/{$fileItem}";

    if (file_exists($fileItem) && is_file($fileItem)) {
      // var_dump(file($fileItem));
      //unlink delete o arquivo
      unlink($fileItem);
    }
  }
} else {
  //deleta a pasta
  rmdir($dirRemove);
}

/*
Minha dúvida é muito simples, é só para ter certeza mesmo:

Quando eu faço a verificação:

if(file_exists($fileItem) && is_file($fileItem)){     etc

Essa verificação automaticamente já isola os atalhos de diretórios "." e ".." por eles não serem arquivos?



Olá Danilo, por padrão sim, como não são arquivos mas apenas atalhos de navegação, eles são ignorados

*/