<?php


namespace Source\Models;

abstract class Model
{
  /**@var object|null */
  protected $data;

  /**@var \PDOException|null */
  protected $fail;

  /**@var string|null */
  protected $message;

  public function data(): ?object
  {
    return $this->data;
  }

  public function fail(): ?\PDOException
  {
    return $this->fail;
  }

  public function message(): ?string
  {
    return $this->message;
  }

  protected function created()
  {
  }


  protected function read(string $select, string $params = null)
  {
    try {
    } catch (\PDOException $exception) {
      $this->fail = $exception;
      return null;
    }
  }

  protected function update()
  {
  }

  protected function delete()
  {
  }

  protected function safe(): ?array
  {
  }

  private function filter()
  {
  }
}
