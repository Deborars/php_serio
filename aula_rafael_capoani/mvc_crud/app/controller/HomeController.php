<?php

class HomeController
{
  public function index()
  {
    try {
      $colectPostagens = Postagem::selecionaTodos();

      $loader = new \Twig\Loader\FilesystemLoader('app/View');
      $twig = new \Twig\Environment($loader);
      $template = $twig->load('home.html');

      $parametros['nome'] = 'Debora';

      $conteudo = $template->render($parametros);
      echo $conteudo;
    } catch (Exception $exception) {
      var_dump($exception->getMessage());
    }
  }
}