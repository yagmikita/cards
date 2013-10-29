<?php

namespace Cards\Infrastructure\Rank;

interface RankInterface
{
    /**
     * @param integer $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @param string $titleFull
     * @return $this
     */
    public function setTitleFull($titleFull);

    /**
     * @param string $titleShort
     * @return $this
     */
    public function setTitleShort($titleShort);

    /**
     * @return integer
     */
    public function getValue();

    /**
     * @return string
     */
    public function getTitleFull();

    /**
     * @return string
     */
    public function getTitleShort();
}
