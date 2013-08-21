<?php

namespace Card\Holder;

interface HolderAwareInterface
{
    public function getHolder();
    public function setHolder(HolderInterface $holder);
}