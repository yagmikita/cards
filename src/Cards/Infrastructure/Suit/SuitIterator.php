<?php

namespace Cards\Infrastructure\Suit;

use Cards\Infrastructure\StdLib\AbstractIterator;
use Cards\Infrastructure\StdLib\Exceptions\SuitException;

class SuitIterator extends AbstractIterator
{
    public function addEntity($entity)
    {
        if (!$entity instanceof SuitInterface) {
            throw new SuitException('The entity is being added is not of `SuitInterface` type', 1);
        }
        $this->entities[] = $entity;
        parent::addEntity($entity);
        return $this;
    }
}
