<?php

namespace Source\Inheritance\Event;

class Event
{
  private $event;
  private $date;
  private $price;

  private $register;
  private $vacancies;


  /***
  Event construtor
  @param $event
  @param $date
  @param $price
  @param $vacancies
   */


  //dentro do construtor estão inseridas apenas as propriedades que fazem parte a classe de evento
  //o register terá uma função especifica, pois a responsabilidade dele é de registrar pessoas
  //\DateTime $date está fazendo referência ao metodo nativo do PHP na raiz, pois sem esse namespace não possui esta função
  public function __construct($event, \DateTime $date, $price, $vacancies)
  {
    $this->event = $event;
    $this->date = $date;
    $this->price = $price;
    $this->vacancies = $vacancies;
  }

  public function register($fullname, $email)
  {
    if ($this->vacancies >= 1) {
      $this->vacancies -= 1;
      echo "<p class='alert alert-success'>Parabéns {$fullname}, vaga garantida!</p>";
    } else {
      echo "<p class='alert alert-danger'>Desculpe {$fullname}, mas as vagas esgostaram!</p>";
    }
  }


  public function setRegister($fullname, $email): void
  {
    $this->register =
      [
        "name" => $fullname,
        "email" => $email
      ];
  }

  public function getRegister()
  {
    return $this->register;
  }


  public function getEvent()
  {
    return $this->event;
  }

  public function getDate()
  {
    return $this->date->format("d/m/Y H:i");
  }

  public function getPrice()
  {
    return number_format($this->price, "2", ",", ".");
  }

  public function getVacancies()
  {
    return $this->vacancies;
  }
}