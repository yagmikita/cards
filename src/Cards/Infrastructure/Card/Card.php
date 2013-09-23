<?php

namespace Cards\Infrastructure\Card;

use Cards\Infrastructure\Sute\SuitInterface;
use Cards\Infrastructure\Rank\RankInterface;

class Card implements CardInterface
{
    protected $suit;
    protected $rank;

    public function __construct(
        SuitInterface $suit = null,
        RankInterface $rank = null
    )
    {
        $this->setSuit($suit)
            ->setRank($rank);
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
}
