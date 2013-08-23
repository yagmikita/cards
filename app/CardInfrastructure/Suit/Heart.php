<?php

namespace CardInfrastructure\Suit;

class Heart extends SuitAbstract
{
    public function __construct()
    {
        $this->title = 'heart';
        $this->priority = 0;
        $this->color = 'red';
        $this->symbol = 'heart';
    }
}