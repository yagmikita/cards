<?php

namespace CardInfrastructure\Suit;

abstract class SuitAbstract implements SuitInterface
{
    protected $title;
    protected $priority;
    protected $color;
    protected $symbol;

    public function __construct(
        $title = null,
        $priority = null,
        $color = null,
        $symbol = null
    )
    {
        $this->set('title', $title)
            ->set('priority', $priority)
            ->set('color', $color)
            ->set('symbol', $symbol);
    }

    protected function set($param, $value)
    {
        if ($this->get($param)) {
            if (!is_null($value)) {
                $this->$param = $value;
            }
        }
        return $this;
    }

    public function get($param)
    {
        if (isset($this->$param)) {
            return $this->$param;
        }
        return null;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getSymbol()
    {
        return $this->symbol;
    }

    public function title()
    {
        return $this->title;
    }

    public function priority()
    {
        return $this->priority;
    }

    public function color()
    {
        return $this->color;
    }

    public function symbol()
    {
        return $this->symbol;
    }
}