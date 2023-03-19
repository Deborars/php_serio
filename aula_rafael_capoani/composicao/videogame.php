<?php

class VideoGame
{
  private $brinde;

  public function adcGame($nomeJogo)
  {
    $this->brinde = new Game($nomeJogo);
  }
}
