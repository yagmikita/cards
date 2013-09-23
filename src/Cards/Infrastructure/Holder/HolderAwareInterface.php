<?php

namespace Cards\Infrastructure\Holder;

interface HolderAwareInterface
{
    public function getHolder();
    public function setHolder(HolderInterface $holder);
}