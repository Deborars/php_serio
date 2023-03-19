<?php


class Carrinho
{
  private $produtos;

  public function adcCarrinho(Produto $objProd)
  {
    $this->produtos[] = $objProd;
  }

  public function getProdutos()
  {
    return $this->produtos;
  }
}
