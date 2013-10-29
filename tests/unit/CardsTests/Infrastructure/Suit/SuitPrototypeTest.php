<?php

namespace CardTests\Infrastructure\Suit;

class SuitPrototypeTest extends \PHPUnit_Framework_TestCase
{
    public $suits = array(
        'spades',
        'hearts',
        'clubs',
        'diamonds',
    );
    public $ranks = array(
        0 => "Jocker",
        1 => "1",
        2 => "2",
        3 => "3",
        4 => "4",
        5 => "5",
        6 => "6",
        7 => "7",
        8 => "8",
        9 => "9",
        10 => "10",
        11 => "Jack",
        12 => "Queen",
        13 => "King",
        14 => "Ace",
    );
    protected $card;

    public function setUp()
    {
        $this->card = new \Cards\Infrastructure\Card\Card();
    }

    public function tearDown()
    {
        unset($this->card);
    }

    public function testCardIsCreatedSuccessfully()
    {
        $this->assertTrue(in_array($this->card->getSuit(), $this->suits));
        $this->assertTrue(in_array($this->card->getRank(), $this->ranks));
    }
}
