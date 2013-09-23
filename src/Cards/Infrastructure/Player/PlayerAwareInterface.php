<?php

namespace Cards\Infrastructure\Player;

interface PlayerAwareInterface
{
    public function hasPlayers();
    public function getPlayers();
    public function delPlayers(array $playersId);
}
