<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

<?php

use Source\App\Trigger;

require_once("source/App/Trigger.php");
require_once("source/App/User.php");
require_once("source/Bank/Account.php");
require_once("source/Bank/AccountSaving.php");

$client = new \Source\App\User("Debora", "Rosado");

// $teste = new \Source\Bank\Account(0413, "12323256-4", $debora, 1);
$saving = new \Source\Bank\AccountSaving('1652', '112145', $client, 10);

$saving->extract();
$saving->deposit(10);
$saving->extract();
$saving->withdrawal(10);
$saving->withdrawal(1);
$saving->extract();
// var_dump($saving);