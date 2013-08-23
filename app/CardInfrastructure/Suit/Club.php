<?php

namespace CardInfrastructure\Suit;

class Club extends SuitAbstract
{
    public function __construct()
    {
        $this->title = 'club';
        $this->priority = 0;
        $this->color = 'black';
        $this->symbol = 'cross';
    }
}