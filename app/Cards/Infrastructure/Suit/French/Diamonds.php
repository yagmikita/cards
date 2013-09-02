<?php

namespace Cards\Infrastructure\Suit\French;

use Cards\Infrastructure\Suit\SuitAbstract;

class Diamonds extends SuitAbstract
{
    public function __construct($priority = 0, $isTrump = false)
    {
        parent::__construct(
            [
                'title' => 'diamond',
                'priority' => $priority,
                'color' => 'red',
                'symbol' => 'rhombus',
                'isTrump' => $isTrump,
            ]
        );
    }
}
