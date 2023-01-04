<?php

namespace Source\Members;


class Trigger
{
  private const TRIGGER =  "trigger";
  public const SUCCESS = 'success';
  public const WARNING = 'warning';
  public const DANGER = 'danger';

  private static $message;
  private static $errorType;
  private static $error;
}