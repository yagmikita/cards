<?php

namespace CardTests\Infrastructure;

use CardsTests\CardsTestCase;
use Cards\Infrastructure\Suit\Suit;
use Cards\Infrastructure\Suit\SuitInterface;

class SuitTest extends CardsTestCase
{
    public function testCanCreateSuit()
    {
        $suit = new Suit($this->resource(), $this->getSuitParams());
        $this->assertTrue($suit instanceof SuitInterface);
    }

    public function testSuitGetters()
    {
        $suit = new Suit($this->resource(), $this->getSuitParams());
        $this->assertTrue($suit->getTitle() == $this->getSuitParams()['title']);
        $this->assertTrue($suit->getColor() == $this->getSuitParams()['color']);
        $this->assertTrue($suit->getSymbol() == $this->getSuitParams()['symbol']);
        $this->assertTrue($suit->isTrump() == $this->getSuitParams()['isTrump']);
    }

    /**
     * @depends testSuitGetters
     */
    public function testSuitSetters()
    {
        $suit = new Suit($this->resource(), $this->getSuitParams());
        $suit->setTitle($this->getSuitAltParams()['title']);
        $suit->setColor($this->getSuitAltParams()['color']);
        $suit->setSymbol($this->getSuitAltParams()['symbol']);
        $suit->setAsTrump($this->getSuitAltParams()['isTrump']);
        $this->assertTrue($suit->getTitle() == $this->getSuitAltParams()['title']);
        $this->assertTrue($suit->getColor() == $this->getSuitAltParams()['color']);
        $this->assertTrue($suit->getSymbol() == $this->getSuitAltParams()['symbol']);
        $this->assertTrue($suit->isTrump() == $this->getSuitAltParams()['isTrump']);
    }
}
