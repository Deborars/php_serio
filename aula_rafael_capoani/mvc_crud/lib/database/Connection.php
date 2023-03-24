<?php

abstract class Connection
{
  private static $conn;

  public static function getConn()

  {
    self::$conn = new PDO('mysql: host=localhost; dbname=mvc_rafael;', 'root', '');
    return self::$conn;
  }
}