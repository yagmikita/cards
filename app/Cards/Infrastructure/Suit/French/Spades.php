<?php

namespace Cards\Infrastructure\Suit\French;

use Cards\Infrastructure\Suit\SuitAbstract;

class Spades extends SuitAbstract
{
    public function __construct($priority = 0, $isTrump = false)
    {
        parent::__construct(
            [
                'title' => 'spade',
                'priority' => $priority,
                'color' => 'black',
                'symbol' => 'black-heart',
                'isTrump' => $isTrump,
            ]
        );
    }
}
