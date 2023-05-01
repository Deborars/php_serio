<?php
session_start();

include_once("connection.php");
include_once("url.php");

$query = 'SELECT * FROM contacts';

$stmt = $conn->prepare($query);

$stmt->execute();
// By this way you can close connection in PDO.
$conn = null;

$contacts = $stmt->fetchAll();