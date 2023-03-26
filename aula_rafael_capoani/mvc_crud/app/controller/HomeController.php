<?php

class HomeController
{
  public function index()
  {
    try {
      $colectPostagens = Postagem::selecionaTodos();
      var_dump($colectPostagens);
    } catch (Exception $exception) {
      var_dump($exception->getMessage());
    }
  }
}