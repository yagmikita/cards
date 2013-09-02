<?php

namespace Cards\Infrastructure\Suit;

interface SuitInterface
{
    public function get();
    public function getTitle();
    public function getPriority();
    public function getColor();
    public function getSymbol();
    public function title();
    public function priority();
    public function color();
    public function symbol();
    public function isTrump();
}
