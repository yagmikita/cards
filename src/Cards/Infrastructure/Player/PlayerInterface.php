<?php

namespace Cards\Infrastructure\Player;

interface PlayerInterface
{
    public function turn();
    public function getTurn();
    public function setTurn(array $cards);
}
