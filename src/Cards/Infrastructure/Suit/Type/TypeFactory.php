<?php

namespace Cards\Infrastructure\Suit\Type;

class TypeFactory
{
    protected $typeName;

    public function __construct($typeName = null)
    {
        $this->setTypeName($typeName);
    }

    public function setTypeName($typeName)
    {
        $this->typeName = is_null($typeName) ? 'null' : $typeName;
        return $this;
    }

    public function getTypeName()
    {
        return $this->typeName;
    }

    public function get()
    {
        $className = __NAMESPACE__ . '\\' . ucfirst($this->typeName);
        return $className::options();
    }

    public function getFrenchOptions()
    {
        return French::options();
    }
}
