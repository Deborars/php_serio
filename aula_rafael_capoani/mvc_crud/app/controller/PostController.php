<?php

class PostController
{
  public function index($params)
  {
    try {
      $postagem = Postagem::selecionaPorId($params);

      $loader = new \Twig\Loader\FilesystemLoader('app/View');
      $twig = new \Twig\Environment($loader);
      $template = $twig->load('single.html');

      $parametros = array();
      $parametros['titulo'] = $postagem->titulo;
      $parametros['conteudo'] = $postagem->conteudo;

      $conteudo = $template->render($parametros);
      echo $conteudo;
    } catch (Exception $exception) {
      var_dump($exception->getMessage());
    }
  }
}