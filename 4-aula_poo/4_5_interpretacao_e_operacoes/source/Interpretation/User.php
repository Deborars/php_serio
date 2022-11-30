<?php

namespace Source\Intepretation;

class User
{
  private $firstName;
  private $lastName;
  private $email;

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