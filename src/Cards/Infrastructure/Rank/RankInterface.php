<?php

namespace Cards\Infrastructure\Rank;

interface RankInterface
{
    public function setValue($value);
    public function setTitle($title);
    public function getValue();
    public function value();
    public function title();
}
