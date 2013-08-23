<?php

namespace Card\Rank;

interface RankAwareInterface
{
    public function getRank();
    public function setRank(RankInterface $rank);
}