<?php

namespace Source\Intepretation;

class Product
{
  public $name;
  private $price;
  private $data;


  public function __set($name, $value)
  {
    $this->notFound(__FUNCTION__, $name);
    //o data vai guardando as propriedades que não existem na classe
    $this->data[$name] = $value;
  }

  public function __get($name)
  {
    echo "<p>O curso {$this->title} da {$this->company} é o melhor curso de PHP</p>";
  }

  public function handler($name, $price)
  {
    $this->name = $name;
    $this->price = number_format($price, 2, ".", ",");
  }

  public function notFound($method, $name)
  {
    echo "<p class='alert alert-danger'>{$method}: A propriedade {$name} não existe em " . __CLASS__ . "!</p>";
  }
}