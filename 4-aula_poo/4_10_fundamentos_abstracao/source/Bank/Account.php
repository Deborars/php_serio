<?php

namespace Source\Bank;

use Source\App\Trigger;
use Source\App\User;


class Account
{
  private $branch; //agencia
  private $account;
  private $client;
  private $balance; //saldo


  public function __construct($branch, $account, User $client, $balance)
  {
    $this->branch = $branch;
    $this->account = $account;
    $this->client = $client;
    $this->balance = $balance;
  }

  public function extract()
  {
    $extract = ($this->balance >= 1 ? Trigger::SUCCESS : Trigger::DANGER);
    Trigger::show("EXTRATO: saldo atual: {$this->toBrl($this->balance)}", $extract);
  }

  public function toBrl($value)
  {
    return "R$ " . number_format($value, "2", ",", ".");
  }
}