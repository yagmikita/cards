<?php

namespace CardInfrastructure\Suit;

class Spade extends SuitAbstract
{
    public function __construct()
    {
        $this->title = 'spade';
        $this->priority = 0;
        $this->color = 'black';
        $this->symbol = 'black-heart';
    }
}