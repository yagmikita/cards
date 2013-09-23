<?php

namespace Cards\Infrastructure\Suit;

use Cards\Infrastructure\Suit\Type\TypeFactory;

class SuitPrototype implements SuitInterface
{
    protected $title;
    protected $priority;
    protected $color;
    protected $symbol;
    protected $isTrump;
    protected $isActive;
    protected $typeFactory;

    public function __construct(array $suitType = null, TypeFactory $typeFactory = null)
    {
        if (is_null($suitType)) {
            $suitType = 'null';
        }
        $this->setTypeFactory($suitType, $typeFactory);
        $params = $this->typeFactory->get();
        $this->set('title', $params['title'])
            ->set('priority', $params['priority'])
            ->set('color', $params['color'])
            ->set('symbol', $params['symbol'])
            ->set('isTrump', $params['isTrump'])
            ->set('isActive', $params['isActive']);
    }

    protected function set($param, $value)
    {
        if ($this->get($param)) {
            if (is_null($value)) {
                throw new \Exception("Can not set Suit parameter '{$param}' to NULL", 1);
            }
            $this->$param = $value;
        }
        return $this;
    }

    public function setTypeFactory($suitType, TypeFactory $typeFactory = null)
    {
        $this->typeFactory = is_null($typeFactory) ? new TypeFactory : $typeFactory;
        $this->typeFactory->setTypeName($suitType);
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

    public function isActive()
    {
        return $this->isActive;
    }

    public function activate()
    {
        return $this->isActive = true;
    }

    public function deactivate()
    {
        return $this->isActive = false;
    }

    public function increasePriorityBy($i)
    {
        $this->priority = $this->priority + $i;
        return $this;
    }

    public function decreasePriorityBy($i)
    {
        $this->priority = $this->priority - $i;
        return $this;
    }

    public function setTrumpSuit()
    {
        $this->isTrump = true;
        return $this;
    }

    public function removeTrump()
    {
        $this->isTrump = false;
        return $this;
    }
}
