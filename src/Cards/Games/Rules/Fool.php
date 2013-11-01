<?php

namespace Cards\Games\Rules;

use Cards\Infrastructure\StdLib\RulesInterface;

class Fool implements RulesInterface
{
    const DECK_GAME = 36;
    const DECK_PLAYER = 6;
    const RANK_GAME_MIN = 6;

    public static function rules()
    {
        return [
            'game' => [
                'begin' => [
                    [
                        'class' => 'DeckManager',
                        'method' => [
                            [
                                'init',
                                'params' => [
                                    'deckType' => 'game',
                                    'minRankValue' => self::RANK_GAME_MIN,
                                ],
                            ],
                            [
                                'shuffle',
                                'params' => [
                                    'deckType' => 'game',
                                ],
                            ],
                        ],
                    ],
                    [
                        'class' => 'PlayerManager',
                        'method' => [
                            [
                                'grabFromDeck',
                                'params' => [
                                    'playerStatus' => 'idle',
                                    'deckType' => 'game',
                                ],
                            ],
                            [
                                'reindexPlayers',
                            ],
                        ],
                    ],
                ],
                'loop' => [
                    'turn' => [
                        'class' => 'GameManager',
                        'method' => [
                            'analyzeTurn',
                            'params' => [
                                'playerStatus' => 'defender',
                                'deckType' => 'game',
                            ],
                        ],
                    ],
                    'criteria' => [
                        'loose' => [
                            [
                                'class' => 'PlayerManager',
                                'method' => [
                                    'grabFromDeck',
                                    'params' => [
                                        'playerStatus' => 'defender',
                                        'deckType' => 'game',
                                    ],
                                ],
                            ],
                            [
                                'class' => 'PlayerManager',
                                'method' => 'grabFromDeck',
                                'params' => [
                                    'playerStatus' => 'attacker',
                                    'deckType' => 'idle',
                                    'how' => 'diff',
                                    'max' => self::DECK_PLAYER,
                                ],
                            ],
                        ],
                        'win' => [
                            'class' => 'Player',
                            'method' => 'grabFromDeck',
                            'params' => [
                                'type' => 'game'
                            ],
                        ],
                    ],
                ],
                'end' => [

                ],
            ],
        ];
    }
}
