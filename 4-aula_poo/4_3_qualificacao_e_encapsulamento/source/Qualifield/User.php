<?php

/*Source é o nome do fornecedor é a classe principal e o Qualifield é o nome do namespace*/

namespace Source\Qualifield;



/**
 * classe para inserir todas as informações necessárias ao usuario
  ext phpdoc -> ctrl+enter
 */
class User
{

  private $firstName;
  private $lastName;
  private $email;
  private $error;

  public function getError()
  {
    return $this->error;
  }

  public function setUser($firstName, $email)
  {
    $this->setFirstName($firstName);

    if (!$this->setEmail($email)) {
      //
      $this->error = "<p class='alert alert-danger'>O " . $this->getEmail() . " é inválido</p>";
      return false;
    }

    return true;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }


  private function setFirstName($firstName)
  {
    $this->firstName = strip_tags($firstName);
  }

  // function isAdult()
  // {
  //   return $this->age >= 18 ? "an Adult" : "Not an Adult";
  // }

  public function getEmail()
  {
    return $this->email;
  }

  private function setEmail($email)
  {
    $this->email = $email;
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }
}