<?php

namespace Source\Bank;

use Source\App\Trigger;
use Source\App\User;

class AccountCurrent extends Account
{
  private $limit;

  public function __construct($branch, $account, User $client, $balance, $limit)
  {
    parent::__construct($branch, $account, $client, $balance);
    $this->limit = $limit;
  }

  //o final impede que a classe filha modifique a classe (resumindo evita o polimorfismo)
  final public function deposit($value)
  {
    $this->balance += $value;
    Trigger::show("Déposito de {$this->toBrl($value)} realizado com sucesso!", Trigger::SUCCESS);
  }

  final public function withdrawal($value) //saque
  {
    if ($value <= $this->balance + $this->limit) {
      $this->balance -= abs($value);
      Trigger::show("Saque de {$this->toBrl($value)}", Trigger::DANGER);

      if ($this->balance < 0) {
        $tax = abs($this->balance) * 0.006;
        $this->balance -= $tax;
        Trigger::show("Taxa de uso de limite: {$this->toBrl($tax)}", Trigger::WARNING);
      }
    } else {
      $saving = $this->balance + $this->limit;
      Trigger::show("Saldo insuficiente, você tem {$this->toBrl($saving)}!", Trigger::WARNING);
    }
  }
}