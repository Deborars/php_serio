<?php

namespace Source\Intepretation;

class User
{
  private $firstName;
  private $lastName;
  private $email;

  public function __construct($firstName, $lastName, $email)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
  }

  public function __clone()
  {
    $this->firstName = null;
    $this->lastName = null;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function setLastName()
  {
    return $this->lastName;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail()
  {
    return $this->email;
  }
}