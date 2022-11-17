<?php

/**
 * classe para inserir todas as informações necessárias ao usuario
  ext phpdoc -> ctrl+enter
 */
class User
{

  public $firstName;
  public $lastName;
  public $email;

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($firstName)
  {
    $this->firstName = strip_tags($firstName);
  }

  // function isAdult()
  // {
  //   return $this->age >= 18 ? "an Adult" : "Not an Adult";
  // }

  public function getEmail()
  {
    $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }
}