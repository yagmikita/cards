<?php

namespace Cards\Infrastructure\Suit;

use Cards\Infrastructure\Suit\Type\TypeFactory;

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
    public function isActive();
    public function activate();
    public function deactivate();
    public function increasePriorityBy($i);
    public function decreasePriorityBy($i);
    public function setTypeFactory($suitType, TypeFactory $typeFactory = null);
    public function setTrumpSuit();
    public function removeTrump();
}
