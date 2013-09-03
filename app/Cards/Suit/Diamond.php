<?php

namespace App\CardInfrastructure\Suit;

class Diamond extends SuitAbstract
{
    public function __construct()
    {
        $this->title = 'diamond';
        $this->priority = 0;
        $this->color = 'red';
        $this->symbol = 'rhombus';
    }
}