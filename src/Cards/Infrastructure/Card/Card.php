<?php

namespace Cards\Infrastructure\Card;

use Cards\Infrastructure\StdLib\Exceptions\CardException;
use Cards\Infrastructure\Suit\SuitInterface;
use Cards\Infrastructure\Rank\RankInterface;
use Cards\Infrastructure\StdLib\ResourceAbstract;

class Card extends ResourceAbstract implements CardInterface
{
    protected $suit;
    protected $rank;

    public function __construct(array $resource, SuitInterface $suit, RankInterface $rank)
    {
        parent::__construct($resource);
        $this->setSuit($suit)->setRank($rank);
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
