<?php

namespace Cards\Infrastructure\Rank;

class Rank implements RankInterface
{
    protected $value;
    protected $title;

    public function __construct(array $rank)
    {
        $this->setValue($rank['value']);
        $this->setTitle($rank['title']);
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function value()
    {
        return $this->value;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function title()
    {
        return $this->title;
    }
}
