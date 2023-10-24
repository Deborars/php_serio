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
      echo "<script>window.location.href='" . $this->url . $redirect . "'</script>";
    } else {
      //pega a ultima url que o usuario acessou $_SERVER["HTTP_REFERER"] 
      echo "<script>window.location.href='" . $_SERVER["HTTP_REFERER"] . "'</script>";
    }
  }

  public function getMessage()
  {
    if (!empty($_SESSION["msg"])) {
      return [
        "msg" => $_SESSION["msg"],
        "type" => $_SESSION["type"]
      ];
    } else {
      return false;
    }
  }
  public function clearMessage()
  {
    $_SESSION['msg'] = "";
    $_SESSION['type'] = "";
  }
}
