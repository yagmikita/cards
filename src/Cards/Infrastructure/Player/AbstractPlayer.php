<?php

namespace Cards\Infrastructure\Player;

use Cards\Infrastructure\Holder\HolderAwareInterface;
use Cards\Infrastructure\Holder\HolderInterface;

abstract class AbstractPlayer implements PlayerInterface, HolderAwareInterface
{
    protected $uid;
    protected $holder;
    protected $turn;

    public function __construct($uid, HolderInterface $holder, array $cards = [])
    {
        $this->setHolder($holder);
        $this->setTurn($cards);
    }

    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function getHolder()
    {
        return $this->holder;
    }

    public function setHolder(HolderInterface $holder)
    {
        $this->holder = $holder;
        return $this;
    }

    public function getTurn()
    {
        return $this->turn;
    }

    public function setTurn(array $cards = [])
    {
        $this->turn = $cards;
        return $this;
    }
}
