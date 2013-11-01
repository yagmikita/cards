<?php

namespace Cards\Infrastructure\StdLib;

interface EntityAggregatedInterface
{
    /**
     * @return array
     */
    public function getAll();

    /**
     * @param \Cards\Infrastructure\Suit\SuitInterface $suit
     * @return $this
     */
    public function addEntity($entity);

    /**
     * @param array $suits
     * @param bool $append
     * @return $this
     */
    public function addEntities(array $entities, $append = false);
}