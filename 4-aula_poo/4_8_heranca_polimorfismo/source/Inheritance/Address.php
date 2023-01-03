<?php

namespace Source\Inheritance;

class Address
{
  private $street;
  private $number;
  private $complement;

  public function __construct($street, $number, $complement = NULL)
  {
    $this->street = $street;
    $this->number = $number;
    $this->complement = $complement;
  }


  public function setStreet($street)
  {
    $this->street = $street;
  }

  public function getStreet()
  {
    return $this->street;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function setComplement($complement)
  {
    return $this->complement = $complement;
  }

  public function getComplement()
  {
    return $this->complement;
  }
}