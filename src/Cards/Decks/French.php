<?php

namespace Cards\Decks;

use Cards\Infrastructure\StdLib\ConfigInterface;

class FrenchDeck implements ConfigInterface
{
    public static function config()
    {
        return [
            'suit' => [
                [
                    'title' => 'hearts',
                    'color' => 'red',
                    'symbol' => 'heart',
                    'isTrump' => false,
                ],
                [
                    'title' => 'spades',
                    'color' => 'black',
                    'symbol' => 'heart',
                    'isTrump' => false,
                ],
                [
                    'title' => 'clubs',
                    'color' => 'black',
                    'symbol' => 'cross',
                    'isTrump' => false,
                ],
                [
                    'title' => 'diamonds',
                    'color' => 'red',
                    'symbol' => 'rhombus',
                    'isTrump' => false,
                ],
            ],
            'rank' => [
                [
                    'value' => 2,
                    'titleFull' => 'two',
                    'titleShort' => '2',
                ],
                [
                    'value' => 3,
                    'titleFull' => 'three',
                    'titleShort' => '3',
                ],
                [
                    'value' => 4,
                    'titleFull' => 'four',
                    'titleShort' => '4',
                ],
                [
                    'value' => 5,
                    'titleFull' => 'five',
                    'titleShort' => '5',
                ],
                [
                    'value' => 6,
                    'titleFull' => 'six',
                    'titleShort' => '6',
                ],
                [
                    'value' => 7,
                    'titleFull' => 'seven',
                    'titleShort' => '7',
                ],
                [
                    'value' => 8,
                    'titleFull' => 'eight',
                    'titleShort' => '8',
                ],
                [
                    'value' => 9,
                    'titleFull' => 'nine',
                    'titleShort' => '9',
                ],
                [
                    'value' => 10,
                    'titleFull' => 'ten',
                    'titleShort' => '10',
                ],
                [
                    'value' => 11,
                    'titleFull' => 'Jack',
                    'titleShort' => 'J',
                ],
                [
                    'value' => 12,
                    'titleFull' => 'Queen',
                    'titleShort' => 'Q',
                ],
                [
                    'value' => 13,
                    'titleFull' => 'King',
                    'titleShort' => 'K',
                ],
                [
                    'value' => 14,
                    'titleFull' => 'Ace',
                    'titleShort' => 'A',
                ],
            ],
        ];
    }
}
