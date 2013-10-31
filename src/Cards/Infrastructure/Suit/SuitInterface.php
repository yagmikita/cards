<?php

namespace Cards\Infrastructure\Suit;

interface SuitInterface
{
    /**
     * @return string
     */
    public function getColor();

    /**
     * @return string
     */
    public function getSymbol();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $color
     * @return $this
     */
    public function setColor($color);

    /**
     * @param string $symbol
     * @return $this
     */
    public function setSymbol($symbol);

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * @param bool $isTrump
     * @return $this
     */
    public function setAsTrump($isTrump);

    /**
     * @return bool
     */
    public function isTrump();
}
