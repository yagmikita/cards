<?php

namespace Cards\Infrastructure\Suit;

use Cards\Infrastructure\StdLib\GeneratorInterface;
use Cards\Infrastructure\Suit\Type\TypeFactory;

class SuitGenerator implements GeneratorInterface
{
    protected $suitType;
    protected $typeFactory;
    protected $suits;

    public function __construct($suitType = null, TypeFactory $typeFactory = null)
    {
        $this->suits = [];
        $this->setSuitType($suitType)
            ->setTypeFactory($typeFactory);
    }

    public function setTypeFactory(TypeFactory $typeFactory = null)
    {
        $this->typeFactory = (bool)$typeFactory ?: new TypeFactory;
        return $this;
    }

    public function setSuitType($suitType = null)
    {
        $this->suitType = (bool)$suitType ?: Defaults::SUIT_TYPE;
        return $this;
    }

    public function generate()
    {
        $options = $this->getSuitOptions();
        foreach ($options as $suit) {
            $this->suits[] = new SuitPrototype($suit);
        }
        return $this->suits;
    }

    public function getSuits()
    {
        return $this->suits;
    }

    protected function getSuitOptions()
    {
        return $this->typeFactory->get($this->suitType);
    }
}
