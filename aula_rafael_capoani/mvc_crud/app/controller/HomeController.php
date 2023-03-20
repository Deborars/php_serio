<?php

class HomeController
{
  public function index()
  {
    // echo 'oi';
    Postagem::selecionaTodos();
  }
}