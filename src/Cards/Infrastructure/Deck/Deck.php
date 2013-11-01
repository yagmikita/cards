<?php

namespace Cards\Infrastructure\Deck;

use Cards\Infrastructure\StdLib\Exceptions\DeckException;
use Cards\Infrastructure\StdLib\ResourceAbstract;
use Cards\Infrastructure\Card\CardInterface;
use Cards\Infrastructure\Card\CardIterator;

class Deck extends ResourceAbstract implements \Iterator, DeckInterface
{
    protected $cards;

    public function __construct(array $resource, CardIterator $cards)
    {
        parent::__construct($resource);
        $this->cards = $cards;
    }

    public function current()
    {
        return $this->cards->current();
    }

    public function key()
    {
        return $this->cards->key();
    }

    public function next()
    {
        return $this->cards->next();
    }

    public function rewind()
    {
        return $this->cards->rewind();
    }

    public function valid ()
    {
        return $this->cards->valid();
    }

    public function getCards()
    {
        return $this->cards->getAll();
    }

    public function addCard(CardInterface $card)
    {
        $this->cards->addEntity($card);
        return $this;
    }

    public function addCards(array $cards)
    {
        $this->cards->addEntities($cards);
        return $this;
    }

    public function delCard(CardInterface $card)
    {
        $this->iterate(function($index, $_card) use ($card) {
            if ($_card->getId() === $card->getId()) {
                $cards = $this->cards->getAll();
                unset($cards[$card->getId()]);
                $this->cards->addEntities($cards);
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
        $cards = $this->cards->getAll();
        shuffle($cards);
        $this->cards->addEntities($cards);
        return $this;
    }

    public function hasCards()
    {
        return (bool)count($this->cards->getAll());
    }

    protected function iterate(callable $callback)
    {
        foreach ($this->cards->getAll() as $index => $card) {
            $callback($index, $card);
        }
    }
}
