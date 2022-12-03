<?php
require_once __DIR__ . "/config.php";

class API
{
  function Select()
  {
    $db = new Connect;
    $users = array();
    $data = $db->prepare('SELECT * FROM users ORDER BY id');
    $data->execute();
    while ($outPutData = $data->fetch(PDO::FETCH_ASSOC)) {
      $users[$outPutData['id']] = array(
        'id' => $outPutData['id'],
        'name' => $outPutData['name'],
        'age' => $outPutData['age']
      );
    }
    return json_encode($users);
  }
}


$API = new API;
header('Content-Type: application/json');
echo $API->Select();