<?php

namespace Source\Related;

class Company
{
  private $company;
  private $address;
  private $team;
  private $products;

  public function bootCompany($company, $address)
  {
    $this->company = $company;
    $this->address = $address;
  }

  public function getCompany()
  {
    return $this->company;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function getTeam()
  {
    return $this->team;
  }

  public function getProducts()
  {
    return $this->products;
  }
}