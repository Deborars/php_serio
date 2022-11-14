<?php
class ContaBancaria
{
  private $operacao;
  private $agencia;
  private $conta;

  public function __construct($oper, $agenc, $cont)
  {
    $this->operacao = $oper;
    $this->agencia  = $agenc;
    $this->conta    = $cont;
  }

  public function getContaBancaria()
  {
    return $this->operacao . ' ' . $this->agencia . ' ' . $this->conta;
  }
}