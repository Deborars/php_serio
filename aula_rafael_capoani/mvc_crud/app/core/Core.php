<?php

class Core
{
  public function start($getURL)
  {

    $acao = 'index';

    if (isset($getURL["pagina"])) {
      $controller = ucfirst($getURL["pagina"]) . 'Controller';
    } else {
      $controller = 'HomeController';
    }


    if (!class_exists($controller)) {
      $controller = "ErrorController";
    }
    // echo $controller;
    call_user_func_array(array(new $controller, $acao), array());
  }
}