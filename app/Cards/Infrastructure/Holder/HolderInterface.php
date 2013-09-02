<?php

namespace Card\Holder;

interface HolderInterface
{
    public function hasCards();
    public function showCards();
    public function addCards($cards);
    public function addCard($card);
    public function doneCard($card);
}