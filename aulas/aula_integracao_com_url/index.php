<?php

echo "<h1><a href='index.php'>Clear</a></h1>";
echo "<h1><a href='index.php?param=1&param2=2'>Parametros</a></h1>";

$data = [
  "name" => "Debora",
  "company" => "teste"
];

//http_buid_query transforma os parametros em dados para a url
$arguments =  http_build_query($data) . "<br>";

echo "<h1><a href='index.php?{$arguments}'>Args By Array</a></h1>";

$um_array = [
  "teste" => 1,
  "tv" => "LCD"
];

echo http_build_query($um_array) . "<br>";


$objects = (object)$data;
var_dump($objects, http_build_query($objects));

echo '<br><br><br><br><br><br>';

$dataFilter = http_build_query([
  "name" => "Robson",
  "company" => "Upside",
  "email" => "cursos@upside.com.br",
  "site" => "upside.com.br",
  "script" => "<script>alert('oioioi')</script>"
]);

echo "<p><a href='index.php?{$dataFilter}'> Data Filter</a></p>";

$dataUrl = filter_input_array(INPUT_GET, FILTER_SANITIZE_ADD_SLASHES);

var_dump($dataUrl);

echo '<br><br><br>';

if ($dataUrl) {
  if (in_array('', $dataUrl)) {
    echo '<p class="alert alert-danger">Faltam dados!</p>';
  } elseif (empty($dataUrl["email"])) {
    echo '<p class="alert alert-danger">Falta email!</p>';
  } elseif (!filter_var($dataUrl, FILTER_VALIDATE_EMAIL)) {
    echo '<p class="alert alert-danger">Email inválido!</p>';
  } else {
    echo '<p class="alert alert-danger">Tudo certo!</p>';
  }
} else {
  echo '<p class="alert alert-danger">Houve um erro!</p>';
}


echo "<br><br><br><br><br><br>";

$dataPreFilter = http_build_query([
  "name" => FILTER_SANITIZE_ADD_SLASHES,
  "company" => FILTER_SANITIZE_ADD_SLASHES,
  "email" => FILTER_VALIDATE_EMAIL,
  "site" => FILTER_VALIDATE_URL,
  "script" => FILTER_SANITIZE_ADD_SLASHES
]);

var_dump(filter_input_array($dataFilter, $dataPreFilter))


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <title>Document</title>
</head>

<body>


</body>

</html>