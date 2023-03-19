<?php

class Produto
{
  private $descricao;
  private $valor;

  public function __construct($desc, $val)
  {
    $this->descricao = $desc;
    $this->valor = $val;
  }

  public function getDescricao()
  {
    return $this->descricao;
  }

  public function getValor()
  {
    return $this->valor;
  }
}
