<?php

namespace App\CardInfrastructure\Card;

use Card\Suit\SuitInterface   as SuitInterface,
    Card\Rank\RankInterface   as RankInterface,
    Card\Rank\HolderInterface as HolderInterface;

class Card implements CardInterface
{
    protected $_suit;
    protected $_rank;
    protected $_holder;

    public function __construct(
        SuitInterface $suit = null,
        RankInterface $rank = null,
        HolderInterface $holder = null
    )
    {
        $this->setSuit($suit);
        $this->setRank($rank);
        $this->setHolder($holder);
    }

    public function setSuit(SuitInterface $suit)
    {
        $this->_suit = $suit;

        return $this;
    }

    public function getSuit()
    {
        return $this->_suit;
    }

    public function setRank(RankInterface $rank)
    {
        $this->_rank = $rank;

        return $this;
    }

    public function getRank()
    {
        return $this->_rank;
    }

    public function setHolder(HolderInterface $holder)
    {
        $this->_holder = $holder;

        return $this;
    }

    public function getHolder()
    {
        return $this->_holder;
    }

}