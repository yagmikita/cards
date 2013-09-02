<?php

namespace Cards\Infrastructure\Card;

interface CardInterface
{
    public function setSuit(SuitInterface $suit);

    public function getSuit();

    public function setRank(RankInterface $rank);

    public function getRank();

    public function setHolder(HolderInterface $holder);

    public function getHolder();

    public function isTrump();
}
