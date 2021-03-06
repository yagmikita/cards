<?php

namespace CardsTests;

use Aura\Di\Container;
use Aura\Di\Forge;
use Aura\Di\Config;

class CardsTestCase extends \PHPUnit_Framework_TestCase
{
    const CLASSNAME_CARD = '\Cards\Infrastructure\Card\Card';
    const CLASSNAME_SUIT = '\Cards\Infrastructure\Suit\Suit';
    const CLASSNAME_RANK = '\Cards\Infrastructure\Rank\Rank';
    const CLASSNAME_DECK = '\Cards\Infrastructure\Deck\Deck';

    protected $di;

    public function setUp()
    {
        $this->di = new Container(new Forge(new Config));
    }

    protected function resource()
    {
        return [
            'id' => 12345,
            'type' => 'Test'
        ];
    }

    protected function getSuitParams()
    {
        return [
            'title' => 'hearts',
            'color' => 'red',
            'symbol' => 'heart',
            'isTrump' => false,
        ];
    }

    protected function getSuitAltParams()
    {
        return [
            'title' => 'hearts2',
            'color' => 'red2',
            'symbol' => 'heart2',
            'isTrump' => true,
        ];
    }

    protected function getRankParams()
    {
        return [
            'value' => 2,
            'titleFull' => 'two',
            'titleShort' => '2',
        ];
    }

    protected function getRankAltParams()
    {
        return [
            'value' => 33,
            'titleFull' => 'two3',
            'titleShort' => '23',
        ];
    }

    protected function getCard()
    {
        return $this->getMockBuilder(self::CLASSNAME_CARD)
                     ->disableOriginalConstructor()
                     ->getMock();
    }

    protected function getSuit()
    {
        return $this->getMockBuilder(self::CLASSNAME_SUIT)
                     ->disableOriginalConstructor()
                     ->getMock();
    }

    protected function getRank()
    {
        return $this->getMockBuilder(self::CLASSNAME_RANK)
                     ->disableOriginalConstructor()
                     ->getMock();
    }
}
