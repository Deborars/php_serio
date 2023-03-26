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

    if (isset($getURL["id"]) && ($getURL['id'] != null)) {
      $id = $getURL["id"];
    } else {
      $id = null;
    }

    // var_dump($id);
    call_user_func_array(array(new $controller, $acao), array($id));
  }
}