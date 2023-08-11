<?php

class User
{
  public $id;
  public $name;
  public $lastname;
  public $email;
  public $password;
  public $image;
  public $bio;
  public $token;

  public function getFullName($user)
  {
    return $user->name . " " . $user->lastname;
  }

  public function generateToken()
  {
    //bin2hex gera uma string e random_bytes gera outra string com 50 caracteres
    //com essas funções iremos gerar o token que a chance de ter dois tokens com a mesma sequência é praticamente nula
    return bin2hex(random_bytes(50));
  }

  public function generatePassword($password)
  {
    return password_hash($password, PASSWORD_DEFAULT);
  }

  public function imageGenerateName()
  {
    return bin2hex(random_bytes(60)) . ".jpg";
  }
}


interface UserDAOInterface
{
  public function buildUser($data);
  public function create(User $user, $authUser = false);
  public function update(User $user, $redirect = true);
  public function verifyToken($protected = false);
  public function setTokenToSession($token, $redirect = true);
  public function authenticateUser($email, $password);
  public function findById($id);
  public function findByToken($token);
  public function changePassword(User $user);
  public function destroyToken();
}
