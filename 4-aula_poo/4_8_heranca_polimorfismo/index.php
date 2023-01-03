<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

<?php

require_once("./source/Inheritance/Event/Event.php");
require_once("./source/Inheritance/Event/EventLive.php");
require_once("./source/Inheritance/Event/EventOnline.php");
require_once("./source/Inheritance/Address.php");

$data = new DateTime(' 1990-01-22 10:00:00');

$evento = new Source\Inheritance\Event\Event("Natal", $data, "1.99", 1);

$evento->register("Debora", "rsilva....");

$evento->register("Gema", "Bbordon....");


$address = new Source\Inheritance\Address("Rua Ali", 23);
$evento = new Source\Inheritance\Event\EventLive("Ano novo", $data, "1.99", 1, $address);
$eventoOnline = new Source\Inheritance\Event\EventOnline("Workshop", $data, "1.99", 'https://...');

$evento->register("Debora", "rsilva....");

$evento->register("Gema", "Bbordon....");


$eventoOnline->register("Debora", "rsilva....");

$eventoOnline->register("Gema", "Bbordon....");

var_dump($evento);