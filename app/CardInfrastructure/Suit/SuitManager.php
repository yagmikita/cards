<?php

namespace CardInfrastructure\Suit;

class SuitManager
{
    public function __construct(
        Heart $heart = null,
        Club $club = null,
        Diamond $diamond = null,
        Spade $spade = null
    )
    {
        $this->title = 'spade';
        $this->priority = 0;
        $this->color = 'black';
        $this->symbol = 'black-heart';
    }
}