<?php

namespace Cards\Infrastructure\Card;

use Cards\Infrastructure\StdLib\AbstractIterator;
use Cards\Infrastructure\Card\CardInterface;
use Cards\Infrastructure\StdLib\Exceptions\CardException;

class CardIterator extends AbstractIterator
{
    public function addEntity($entity)
    {
        if (!$entity instanceof CardInterface) {
            throw new CardException('The entity is being added is not of `CardInterface` type', 1);
        }
        parent::addEntity($entity);
        return $this;
    }
}
