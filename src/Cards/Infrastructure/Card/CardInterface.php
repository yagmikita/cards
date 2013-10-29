<?php

namespace Cards\Infrastructure\Card;

use Cards\Infrastructure\Suit\SuitAwareInterface;
use Cards\Infrastructure\Rank\RankAwareInterface;

interface CardInterface extends SuitAwareInterface, RankAwareInterface
{
}