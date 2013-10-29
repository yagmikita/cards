<?php

namespace Cards\Infrastructure\Rank;

interface RankAwareInterface
{
    public function getRank();
    public function setRank(RankInterface $rank);
}
