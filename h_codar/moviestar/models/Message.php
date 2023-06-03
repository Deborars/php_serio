<?php

class Message
{
  private $url;

  public function __construct($url)
  {
    $this->url = $url;
  }

  public function setMessage($msg, $type, $redirect = "index.php")
  {
    $_SESSION['msg'] = $msg;
    $_SESSION['type'] = $type;

    if ($redirect != "back") {
      header("Location: $this->url" . $redirect);
    } else {
      //pega a ultima url com o usuario acesso $_SERVER["HTTP_REFERER"]
      //nesse caso será auth.php
      header("Location:" . $_SERVER["HTTP_REFERER"]);
    }
  }

  public function getMessage()
  {
  }
  public function clearMessage()
  {
  }
}