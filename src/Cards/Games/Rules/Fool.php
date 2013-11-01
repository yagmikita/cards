<?php

namespace Cards\Games\Rules;

use Cards\Infrastructure\StdLib\RulesInterface;

class Fool implements RulesInterface
{
    const DECK_GAME = 36;
    const DECK_PLAYER = 6;
    const DECK_PLAYER_EMPTY = 0;
    const RANK_GAME_MIN = 6;

    public static function rules()
    {
        return [
            'turn' => [
                'criteria' => [
                    'loose' => [
                        [
                            'class' => 'PlayerManager',
                            'method' => [
                                'name' => 'grabFromDeck',
                                'params' => [
                                    'playerStatus' => 'defender',
                                    'deckType' => 'game',
                                ],
                            ],
                        ],
                        [
                            'class' => 'PlayerManager',
                            'method' => [
                                'name' => 'grabFromDeck',
                                'params' => [
                                    'playerStatus' => ['attacker', 'idle'],
                                    'deckType' => 'idle',
                                    'how' => 'diff',
                                    'max' => self::DECK_PLAYER,
                                ],
                            ],
                        ],
                    ],
                    'win' => [
                        'class' => 'PlayerManager',
                        'method' => [
                            'name' => 'grabFromDeck',
                            'params' => [
                                'playerStatus' => 'attacker',
                                'type' => 'game',
                                'how' => 'diff',
                                'max' => self::DECK_PLAYER,
                            ],
                        ],
                    ],
                ],
            ],
            'game' => [
                'criteria' => [
                    'loose' => [
                        [
                            'class' => 'PlayerManager',
                            'method' => [
                                [
                                    'name' => 'checkPlayerDeck',
                                    'params' => [
                                        'playerStatus' => 'attacker',
                                        'deckType' => 'game',
                                    ],
                                    'expected' => [
                                        'operation' => '==',
                                        'value' => self::DECK_PLAYER_EMPTY,
                                    ],
                                ],
                                [
                                    'name' => 'checkPlayerDeck',
                                    'params' => [
                                        'playerStatus' => 'attacker',
                                        'deckType' => 'game',
                                    ],
                                    'expected' => [
                                        'operation' => '>',
                                        'value' => self::DECK_PLAYER_EMPTY,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'win' => [
                        'class' => 'Player',
                        'method' => [
                            'name' => 'grabFromDeck',
                            'params' => [
                                'playerStatus' => 'attacker',
                                'type' => 'game'
                            ],
                        ]
                    ],
                ],
                'begin' => [
                    [
                        'class' => 'DeckManager',
                        'method' => [
                            [
                                'name' => 'init',
                                'params' => [
                                    'deckType' => 'game',
                                    'minRankValue' => self::RANK_GAME_MIN,
                                ],
                            ],
                            [
                                'name' => 'shuffle',
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
                                'name' => 'grabFromDeck',
                                'params' => [
                                    'playerStatus' => 'idle',
                                    'deckType' => 'game',
                                    'how' => 'diff',
                                    'max' => self::DECK_PLAYER,
                                ],
                            ],
                            [
                                'name' => 'reindexPlayers',
                            ],
                        ],
                    ],
                ],
                'loop' => [
                    'turn' => [
                        'class' => 'PlayerManager',
                        'method' => [
                            'name' => 'analyzeTurn',
                            'params' => [
                                'playerStatus' => 'defender',
                                'deckType' => 'game',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }
}
