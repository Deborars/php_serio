<?php

require_once("source/Database/Connect.php");

use Source\Database\Connect;

$inset = "Insert into users (first_name, last_name, email, document) 
  values ('Robson', 'Leite', 'curso@upside.com.br', '123245')";

try {
  $conn = Connect::getInstance()->exec($inset);
  var_dump($conn);
} catch (PDOException $exception) {
  var_dump($exception);
}
