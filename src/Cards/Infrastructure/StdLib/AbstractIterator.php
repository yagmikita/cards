<?php

namespace Cards\Infrastructure\StdLib;

abstract class AbstractIterator implements \Iterator, EntityAggregatedInterface
{
    const POSITION_INITIAL = 0;

    protected $entities;
    protected $index;

    public function __construct()
    {
        $this->entities = [];
        $this->index = self::POSITION_INITIAL;
    }

    public function current()
    {
        return $this->entities[$this->index];
    }

    public function key()
    {
        return $this->index;
    }

    public function rewind()
    {
        $this->index = self::POSITION_INITIAL;
        return $this;
    }

    public function next()
    {
        $this->index++;
        return $this;
    }

    public function valid()
    {
        return isset($this->entities[$this->index]);
    }

    public function getAll()
    {
        return $this->entities;
    }

    public function addEntity($entity)
    {
        $this->entities[] = $entity;
    }

    public function addEntities(array $entities, $append = false)
    {
        if ($append) {
            array_merge($this->entities, $entities);
        } else {
            $this->entities = $entities;
        }
        return $this;
    }
}
