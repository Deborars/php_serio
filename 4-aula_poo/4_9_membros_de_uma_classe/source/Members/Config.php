<?php

namespace Source\Members;

class Config
{
  //constantes
  public const COMPANY = "Upside";
  protected const DOMAIN = "Upside.com.br";
  private const SECTOR = "Educação";

  //quando static a propriedade pertence apenas a classe
  public static $company;
  public static $domain;
  public static $sector;

  public static function setConfig($company, $domain, $sector)
  {
    self::$company = $company;
  }
}