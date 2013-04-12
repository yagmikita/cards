<?php

namespace Card\Suit;

interface SuitAwareInterface
{
    public function getSuit();
    public function setSuit(SuitInterface $suit);
}