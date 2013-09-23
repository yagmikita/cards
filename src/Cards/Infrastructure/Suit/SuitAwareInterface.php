<?php

namespace Cards\Infrastructure\Suit;

interface SuitAwareInterface
{
    public function getSuit();
    public function setSuit(SuitInterface $suit);
}
