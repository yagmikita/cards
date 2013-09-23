<?php

namespace Cards\AI;

interface AIInterface
{
    public function collectInfo(array $gameInfo);
    public function prepareTurn();
}