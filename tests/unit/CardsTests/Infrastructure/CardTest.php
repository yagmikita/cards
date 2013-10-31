<?php

namespace CardTests\Infrastructure;

use CardsTests\CardsTestCase;
use Cards\Infrastructure\Card\Card;
use Cards\Infrastructure\Card\CardInterface;
use Cards\Infrastructure\Suit\SuitInterface;
use Cards\Infrastructure\Rank\RankInterface;

class CardTest extends CardsTestCase
{
    public function testCanCreateCard()
    {
        $suit = $this->getSuit();
        $rank = $this->getRank();
        $this->assertTrue(
            (new Card($this->resource(), $suit, $rank)) instanceof CardInterface
        );
    }

    public function testCanGetCardSuit()
    {
        $suit = $this->getSuit();
        $rank = $this->getRank();
        $card = new Card($this->resource(), $suit, $rank);
        $this->assertTrue($card->getSuit() instanceof SuitInterface);
    }

    /**
     * @depends testCanGetCardSuit
     */
    public function testCanSetCardSuit()
    {
        $suit = $this->getSuit();
        $rank = $this->getRank();
        $card = new Card($this->resource(), $suit, $rank);
        $deltaSuit = clone $suit;
        $this->assertTrue($card->setSuit($deltaSuit)->getSuit() instanceof SuitInterface);
    }

    public function testCanGetCardRank()
    {
        $suit = $this->getSuit();
        $rank = $this->getRank();
        $card = new Card($this->resource(), $suit, $rank);
        $this->assertTrue($card->getRank() instanceof RankInterface);
    }

    /**
     * @depends testCanGetCardRank
     */
    public function testCanSetCardRank()
    {
        $suit = $this->getSuit();
        $rank = $this->getRank();
        $card = new Card($this->resource(), $suit, $rank);
        $deltaRank = clone $rank;
        $this->assertTrue($card->setRank($deltaRank)->getRank() instanceof RankInterface);
    }
}
