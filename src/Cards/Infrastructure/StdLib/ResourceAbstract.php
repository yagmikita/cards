<?php

namespace Cards\Infrastructure\StdLib;

abstract class ResourceAbstract implements ResourceInterface
{
    protected $resource;

    public function __construct(array $resource)
    {
        $this->setId($resource['id'])->setType($resource['type']);
    }

    public function getType()
    {
        return $this->resource['type'];
    }

    public function getId()
    {
        return $this->resource['id'];
    }

    public function setType($type)
    {
        $this->resource['type'] = $type;
        return $this;
    }

    public function setId($id)
    {
        $this->resource['id'] = $id;
        return $this;
    }
}
