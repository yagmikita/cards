<?php

namespace Cards\Infrastructure\Suit\French;

use Cards\Infrastructure\Suit\SuitAbstract;

class Hearts extends SuitAbstract
{
    public function __construct($priority = 0, $isTrump = false)
    {
        parent::__construct(
            [
                'title' => 'heart',
                'priority' => $priority,
                'color' => 'red',
                'symbol' => 'heart',
                'isTrump' => $isTrump,
            ]
        );
    }
}
