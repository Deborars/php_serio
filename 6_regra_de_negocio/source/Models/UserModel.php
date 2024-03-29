<?php

namespace Source\Models;

class UserModel extends Model
{
  /**@var array $safe no update or create */
  //previne a manipulação dos itens que constam no array na aplicação
  protected static $safe = ["id", "created_at", "update_at"];

  /**@var string $entity database table */
  protected static $entity = "users";

  public function bootstrap()
  {
  }

  public function load(int $id, string $columns = "*")
  {
    $load = $this->read("SELECT {$columns} FROM " . self::$entity . "WHERE id =:id", "id={$id}");
  }

  public function find($email)
  {
  }

  public function all($limit = 30, $offset = 0)
  {
  }

  public function save()
  {
  }

  public function destroy()
  {
  }

  private function required()
  {
  }
}
