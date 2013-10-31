<?php

namespace Cards\Infrastructure\Rank;

use Cards\Infrastructure\StdLib\AbstractIterator;
use Cards\Infrastructure\StdLib\Exceptions\RankException;

class RankIterator extends AbstractIterator
{
    public function addEntity($entity)
    {
        if (!$entity instanceof RankInterface) {
            throw new RankException('The entity is being added is not of `RankInterface` type', 1);
        }
        parent::addEntity($entity);
        return $this;
    }
}
