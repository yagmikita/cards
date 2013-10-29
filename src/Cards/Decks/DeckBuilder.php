<?php

namespace Cards\Decks;

use Cards\Infrastructure\Deck\DeckInterface;
use Cards\Infrastructure\Card\Card;
use Cards\Infrastructure\Suit\Suit;
use Cards\Infrastructure\Rank\Rank;

class DeckBuilder
{
    const RESOURCE_TYPE_SUIT = 'suit';
    const RESOURCE_TYPE_RANK = 'rank';
    const RESOURCE_TYPE_CARD = 'card';

    protected $deckType;
    protected $config;
    protected $suits;
    protected $ranks;
    protected $deck;

    public function __construct($deckType, DeckInterface $deck)
    {
        $this->setDeckType($deckType);
        $this->cards = $deck;
    }

    public function setDeckType($deckType)
    {
        $this->deckType = $deckType;
        return $this;
    }

    public function getDeck()
    {
        return $this->deck->hasCards() ? $this->deck->shuffle() : $this->createCards(
            $this->buildSuits(),
            $this->buildRanks()
        );
    }

    protected function getConfig()
    {
        $className = __NAMESPACE__ . '\\' . ucfirst($this->deckType);
        $this->config = $className::config();
    }

    protected function buildSuits()
    {
        foreach ($this->config['suit'] as $index => $suit) {
            $this->suits[] = new Suit([
                'id' => $index,
                'type' => self::RESOURCE_TYPE_SUIT,
            ], [
                'title' => $suit['title'],
                'color' => $suit['color'],
                'symbol'=> $suit['symbol'],
                'isTrump'=> $suit['isTrump'],
            ]);
        }
        return $this->suits;
    }

    protected function buildRanks()
    {
        foreach ($this->config['rank'] as $index => $rank) {
            $this->suits[] = new Rank([
                'id' => $index,
                'type' => self::RESOURCE_TYPE_RANK,
            ], [
                'value' => $rank['title'],
                'titleFull' => $rank['titleFull'],
                'titleShort' => $rank['titleShort'],
            ]);
        }
        return $this->ranks;
    }

    protected function createCards($suits, $ranks)
    {
        $i = 0;
        foreach ($suits as $suit) {
            foreach ($ranks as $rank) {
                $this->deck->addCard(new Card(
                    [
                        'id' => $i++,
                        'type' => self::RESOURCE_TYPE_RANK,
                    ],
                    $suit,
                    $rank
                ));
            }
        }
        return $this->deck->shuffle();
    }
}
