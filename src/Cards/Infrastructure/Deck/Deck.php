<?php

namespace Cards\Infrastructure\Deck;

use Cards\Infrastructure\StdLib\Exceptions\DeckException;
use Cards\Infrastructure\StdLib\ResourceAbstract;
use Cards\Infrastructure\Card\CardInterface;

class Deck extends ResourceAbstract implements \Iterator, DeckInterface
{
    const POSITION_INITIAL = 0;

    protected $cards;
    protected $position;

    public function __construct(array $resource, array $cards)
    {
        parent::__construct($resource);
        $this->position = self::POSITION_INITIAL;
        $this->cards = $cards;
    }

    public function current()
    {
        return $this->cards[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position++;
        return $this->current();
    }

    public function rewind()
    {
        $this->position = self::POSITION_INITIAL;
        return $this->current();
    }

    public function valid ()
    {
        return isset($this->cards[$this->position]);
    }

    public function getCards()
    {
        return $this->cards;
    }

    public function addCard(CardInterface $card)
    {
        $this->cards[] = $card;
        return $this;
    }

    public function addCards(array $cards)
    {
        foreach ($cards as $index => $card) {
            if ($card instanceof CardInterface) {
                $this->add($card);
            } else {
                throw new DeckException("[Deck]: the card with index='{$index}' is not of a CardInterface type", 1);
            }
        }
        return $this;
    }

    public function delCard(CardInterface $card)
    {
        $this->iterate(function($index, $_card) use ($card) {
            if ($_card->getId() === $card->getId()) {
                unsert($this->cards[$card->getId()]);
            } else {
                throw new DeckException("[Deck]: there is no card with index='{$index}'", 2);
            }
        });
        return $this;
    }

    public function delCards(array $cards)
    {
        foreach ($cards as $index => $card) {
            if ($card instanceof CardInterface) {
                $this->delCard($card);
            } else {
                throw new DeckException("[Deck]: the card with index='{$index}' is not of a CardInterface type", 1);
            }
        }
        return $this;
    }

    public function shuffle()
    {
        shuffle($this->cards);
        return $this;
    }

    public function hasCards()
    {
        return (bool)count($this->cards);
    }

    protected function iterate(callable $callback)
    {
        foreach ($this->cards as $index => $card) {
            $callback($index, $card);
        }
    }
}
