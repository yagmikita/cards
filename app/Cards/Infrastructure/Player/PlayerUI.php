<?php

namespace Cards\Infrastructure\Player;

class PlayerUI extends AbstractPlayer
{
    public function turn()
    {
        return $this->getTurn();
    }
}
