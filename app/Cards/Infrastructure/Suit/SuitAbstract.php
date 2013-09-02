<?php

namespace Cards\Infrastructure\Suit;

abstract class SuitAbstract implements SuitInterface
{
    protected $title;
    protected $priority;
    protected $color;
    protected $symbol;
    protected $isTrump;

    public function __construct(array $params)
    {
        $this->set('title', $params['title'])
            ->set('priority', $params['priority'])
            ->set('color', $params['color'])
            ->set('symbol', $params['symbol'])
            ->set('isTrump', $params['isTrump']);
    }

    protected function set($param, $value)
    {
        if ($this->get($param)) {
            if (is_null($value)) {
                throw new Exception("Can not set Suit parameter '{$param}' to NULL", 1);
            }
            $this->$param = $value;
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

    public function isTrump()
    {
        return $this->isTrump;
    }
}
