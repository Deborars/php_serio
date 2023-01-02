<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

<?php

require_once("./source/Inheritance/Event/Event.php");

$data = new DateTime(' 1990-01-22 10:00:00');

$eventoDeNatal = new Source\Inheritance\Event\Event("Natal", $data, "1.99", 1);

$eventoDeNatal->register("Debora", "rsilva....");

$eventoDeNatal->register("Gema", "Bbordon....");