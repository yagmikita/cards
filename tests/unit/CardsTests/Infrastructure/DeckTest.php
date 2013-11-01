<?php

namespace CardTests\Infrastructure;

use CardsTests\CardsTestCase;
use Cards\Infrastructure\Suit\SuitInterface;
use Cards\Infrastructure\Rank\RankInterface;
use Cards\Infrastructure\Card\Card;
use Cards\Infrastructure\Card\CardInterface;
use Cards\Infrastructure\Card\CardIterator;
use Cards\Infrastructure\Deck\Deck;
use Cards\Infrastructure\Deck\DeckInterface;

class DeckTest extends CardsTestCase
{
    public function testCanCreateDeckNormally()
    {
        $deck = $this->getMockBuilder(self::CLASSNAME_DECK)
            ->disableOriginalConstructor()
            ->getMock();
        $deck->expects($this->any())
             ->method('getId')
             ->will($this->returnValue($this->resource()['id']));
        $deck->expects($this->any())
             ->method('hasCards')
             ->will($this->returnValue(false));
        $this->assertTrue($deck instanceof DeckInterface);
        $this->assertTrue($deck->getId() == $this->resource()['id']);
        $this->assertFalse($deck->hasCards());
    }

    public function testCreatedDeckCanSetAndGetCards()
    {
        $deck = $this->di->newInstance('\Cards\Infrastructure\Deck\Deck', [
            'resource' => $this->resource(),
            'cards' => $this->di->newInstance('\Cards\Infrastructure\Card\CardIterator')
        ]);
        $this->assertFalse($deck->hasCards());
        $this->assertTrue(count($deck->getCards()) == 0);
        $deck->addCard($this->getCard());
        $this->assertTrue($deck->hasCards());
        $this->assertTrue(count($deck->getCards()) == 1);
    }
}
