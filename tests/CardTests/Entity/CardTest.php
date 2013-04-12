<?php

namespace CardTests\Card;

use Card\Card\Card as Card;

class CardTest extends \PHPUnit_Framework_TestCase
{
    protected $_card;
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

    public function setUp()
    {
        $this->_card = new Card;
    }

    public function tearDown()
    {
        unset($this->_card);
    }

    public function testCardIsCreatedSuccessfully()
    {
        $this->assertTrue(in_array($this->_card->getSuit(), $this->suits));
        $this->assertTrue(in_array($this->_card->getRank(), $this->ranks));
    }

}