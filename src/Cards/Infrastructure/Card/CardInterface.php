<?php

namespace Cards\Infrastructure\Card;

use Cards\Infrastructure\Rank\RankAwareInterface;
use Cards\Infrastructure\Suit\SuitAwareInterface;

interface CardInterface extends RankAwareInterface, SuitAwareInterface
{
}
