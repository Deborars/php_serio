<?php

spl_autoload_register(
  function ($class) {
    //um exemplo do que é a classe =   Source\Loading\User

    $namespace = "Source\\"; // duas (//) equivale a uma unica barra, então, fica Source\
    $baseDir = __DIR__ . "/"; //eu tenho o caminho absoluto até chegar no meu arquivo autoload
    $len = strlen($namespace);

    if (strcmp($namespace, $class, $len) !== 0) {
      return;
    }

    //será removido o fornecedor source e mantido o namespace e a classe
    $relativeClass = substr($class, $len);

    // var_dump($relativeClass);

    var_dump($class, $namespace, $baseDir);
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . "php";
    if (file_exists($file)) {
      require $file;
    }
  }
);