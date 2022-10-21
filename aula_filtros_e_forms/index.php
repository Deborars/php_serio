<?php

// $fileOpen = fopen(__DIR__ . "/form.php", "w");
// fwrite($fileOpen, "teste");
// fclose($fileOpen);

// var_dump($fileOpen);

$form = new stdClass();
$form->name = "";
$form->email = "";


// var_dump($_REQUEST);
$form->method = "post";



//estou incluindo o form a index
include __DIR__ . "./form.php";



$post = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump([
  $post,
  $postArray
]);

$form = new stdClass();
$form->name = "teste";
$form->email = "teste@gmail.com";



$form->method = "post";

if ($postArray) {


  //in_array verifica se existe algum dos campos em branco
  if (in_array("", $postArray)) {
    echo '<div style=" max-width:500px;padding:20px 10px;margin-top:10px; background: #e29578; color:#fff; font-size:18px; font-weight:bold; font-family:sans-serif" role="alert">Preencha todos os campos!</div>';

    //filter_validate_email verifica se o email é valido caso não seja, ele irá retornar um bool false

  } elseif (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
    echo '<div style="max-width:500px;padding:20px 10px;margin-top:10px; background: #f7b267; color:#fff; font-size:18px; font-weight:bold; font-family:sans-serif" role="alert">Use um email válido!</div>';
  } else {
    $saveStrip = array_map("strip_tags", $postArray);
    $save = array_map("trim", $saveStrip);
    var_dump($save);
    echo '<div style="max-width:500px;padding:20px 10px;margin-top:10px; background: #bbdef0; color:#fff; font-size:18px; font-weight:bold; font-family:sans-serif" role="alert">
  Todos os dados são válidos!
</div>';
  }
}