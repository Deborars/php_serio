<?php

try {
  throw new Exception("erro");
} catch (Exception $exception) {
  echo $exception->getMessage();
}