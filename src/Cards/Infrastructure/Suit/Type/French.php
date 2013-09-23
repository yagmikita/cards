<?php

namespace Cards\Infrastructure\Suit\Type;

use Cards\Infrastructure\Sui\TypeInterface;

class French implements TypeInterface
{
    public static function options()
    {
        return [
            'null' => [
                'title' => '',
                'priority' => 0,
                'color' => '',
                'symbol' => '',
                'isTrump' => false,
                'isActive' => true,
            ],
            'clubs' => [
                'title' => 'club',
                'priority' => 0,
                'color' => 'black',
                'symbol' => 'cross',
                'isTrump' => false,
                'isActive' => true,
            ],
            'diamonds' => [
                'title' => 'diamond',
                'priority' => 0,
                'color' => 'red',
                'symbol' => 'rhombus',
                'isTrump' => false,
                'isActive' => true,
            ],
            'hearts' => [
                'title' => 'heart',
                'priority' => 0,
                'color' => 'red',
                'symbol' => 'heart',
                'isTrump' => false,
                'isActive' => true,
            ],
            'spades' => [
                'title' => 'spade',
                'priority' => 0,
                'color' => 'black',
                'symbol' => 'black-heart',
                'isTrump' => false,
                'isActive' => true,
            ],
        ];
    }
}