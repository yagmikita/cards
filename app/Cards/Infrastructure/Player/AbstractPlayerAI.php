<?php

namespace Cards\Infrastructure\Player;

use Cards\AI\AIInterface;

abstract class AbstractPlayerAI extends AbstractPlayer implements AIInterface
{
    protected $gameInfo;

    public function collectInfo(array $gameInfo)
    {
        $this->gameInfo = $gameInfo;
    }

    public function turn()
    {
        $this->prepareTurn();
        return $this->getTurn();
    }
}
