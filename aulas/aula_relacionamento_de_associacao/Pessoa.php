<?php

class Pessoa
{

  private $nome;
  private $conta;

  public function __construct($nom, $cont)
  {
    $this->nome   = $nom;
    $this->conta  = $cont;
  }

  function getConta()
  {
    return $this->conta;
  }
}