<?php

namespace Cards\Infrastructure\Rank;

use Cards\Infrastructure\StdLib\ResourceAbstract;

class Rank extends ResourceAbstract implements RankInterface
{
    protected $value;
    protected $titleFull;
    protected $titleShort;

    public function __construct(array $resource, array $params)
    {
        parent::__construct($resource);
        $this->setValue($params['value'])
            ->setTitleFull($params['titleFull'])
            ->setTitleShort($params['titleShort']);
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function setTitleFull($titleFull)
    {
        $this->titleFull = $titleFull;
        return $this;
    }

    public function setTitleShort($titleShort)
    {
        $this->titleShort = $titleShort;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getTitleFull()
    {
        return $this->titleFull;
    }

    public function getTitleShort()
    {
        return $this->titleShort;
    }
}
