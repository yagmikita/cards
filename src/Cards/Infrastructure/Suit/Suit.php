<?php

namespace Cards\Infrastructure\Suit;

use Cards\Infrastructure\StdLib\ResourceAbstract;

class Suit extends ResourceAbstract implements SuitInterface
{
    protected $title;
    protected $color;
    protected $symbol;
    protected $isTrump;

    public function __construct(array $resource, array $params)
    {
        parent::__construct($resource);
        $this->setTitle($params['title'])
            ->setColor($params['color'])
            ->setSymbol($params['symbol'])
            ->setAsTrump($params['isTrump']);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getSymbol()
    {
        return $this->symbol;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
        return $this;
    }

    public function setAsTrump($isTrump)
    {
        $this->isTrump = $isTrump;
        return $this;
    }

    public function isTrump()
    {
        return $this->isTrump;
    }
}
