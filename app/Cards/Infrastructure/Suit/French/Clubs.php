<?php

namespace Cards\Infrastructure\Suit\French;

use Cards\Infrastructure\Suit\SuitAbstract;

class Clubs extends SuitAbstract
{
    public function __construct($priority = 0, $isTrump = false)
    {
        parent::__construct(
            [
                'title' => 'club',
                'priority' => $priority,
                'color' => 'black',
                'symbol' => 'cross',
                'isTrump' => $isTrump,
            ]
        );
    }
}
