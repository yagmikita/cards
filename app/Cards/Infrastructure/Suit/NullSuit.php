<?php

namespace Cards\Infrastructure\Suit;

class NullSuit extends SuitAbstract
{
    public function __construct($priority = 0, $isTrump = false)
    {
        parent::__construct(
            [
                'title' => '',
                'priority' => $priority,
                'color' => '',
                'symbol' => '',
                'isTrump' => $isTrump,
            ]
        );
    }
}
