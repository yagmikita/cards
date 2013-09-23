<?php

namespace Cards\Infrastructure\Holder;

use Cards\Infrastructure\Card\CardInterface;

interface HolderInterface
{
    public function hasCards();
    public function getCards();
    public function addCard(CardInterface $card);
    public function addCards(array $cards);
    public function removeCard(CardInterface $card);
    public function removeCards(array $cards);
}
