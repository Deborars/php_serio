<?php

namespace Source\Inheritance\Event;

use Source\Inheritance\Address;

class EventLive extends Event
{

  /**
   * Undocumented variable
   *
   * @var Address
   */
  private $address;

  public function __construct($event, \DateTime $date, $price, $vacancies, Address $address)
  {
    parent::__construct($event, $date, $price, $vacancies);
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }
}