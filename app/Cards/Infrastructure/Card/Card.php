<?php

namespace Cards\Infrastructure\Card;

use Cards\Infrastructure\Sute\SuitInterface;
use Cards\Infrastructure\Rank\RankInterface;
use Cards\Infrastructure\Holder\HolderInterface;

class Card implements CardInterface
{
    protected $suit;
    protected $rank;
    protected $holder;

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
        $this->suit = $suit;
        return $this;
    }

    public function getSuit()
    {
        return $this->suit;
    }

    public function setRank(RankInterface $rank)
    {
        $this->rank = $rank;
        return $this;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function setHolder(HolderInterface $holder)
    {
        $this->holder = $holder;
        return $this;
    }

    public function getHolder()
    {
        return $this->holder;
    }

    public function isTrump()
    {
        
    }
}
