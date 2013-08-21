<?php

namespace Card\Card;

use Card\Rank\RankAwareInterface as RankAwareInterface,
    Card\Suit\SuitAwareInterface as SuitAwareInterface,
    Card\Holder\HolderAwareInterface as HolderAwareInterface;

interface CardInterface extends RankAwareInterface,
                                SuitAwareInterface,
                                HolderAwareInterface
{
}
