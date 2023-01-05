<?php

namespace Source\Members;

use Reflection;

class Trigger
{
  private const TRIGGER =  "alert";
  public const SUCCESS = 'alert-success';
  public const WARNING = 'alert-warning';
  public const DANGER = 'alert-danger';

  private static $message;
  private static $errorType;
  private static $error;

  private static function setError($message, $errorType)
  {
    $reflection = new \ReflectionClass(__CLASS__);
    $errorTypes = $reflection->getConstants();

    self::$message = $message;
    //in_array vai verificar a partir do array das constantes sucess, warning...se uma delas foi passada
    //no errortype
    self::$errorType = (!empty($errorType) && in_array($errorType, $errorTypes) ? $errorType : "dark");
    self::$error = "<p class='" . self::TRIGGER . " ALERT-" . self::$errorType . "'>" . self::$message . "</p>";
  }

  public static function show($message, $errorType = null)
  {
    self::setError($message, $errorType);
    echo self::$error;
  }
}