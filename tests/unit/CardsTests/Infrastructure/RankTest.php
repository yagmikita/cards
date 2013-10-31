<?php

namespace CardTests\Infrastructure;

use CardsTests\CardsTestCase;
use Cards\Infrastructure\Rank\Rank;
use Cards\Infrastructure\Rank\RankInterface;

class RankTest extends CardsTestCase
{
    public function testCanCreateRank()
    {
        $rank = new Rank($this->resource(), $this->getRankParams());
        $this->assertTrue($rank instanceof RankInterface);
    }

    public function testRankGetters()
    {
        $rank = new Rank($this->resource(), $this->getRankParams());
        $this->assertTrue($rank->getValue() == $this->getRankParams()['value']);
        $this->assertTrue($rank->getTitleFull() == $this->getRankParams()['titleFull']);
        $this->assertTrue($rank->getTitleShort() == $this->getRankParams()['titleShort']);
    }

    /**
     * @depends testSuitGetters
     */
    public function testRankSetters()
    {
        $rank = new Suit($this->resource(), $this->getRankParams());

        $rank->setValue($this->getRankAltParams()['value']);
        $rank->setTitleFull($this->getRankAltParams()['titleFull']);
        $rank->setTitleShort($this->getRankAltParams()['titleShort']);

        $this->assertTrue($rank->getValue() == $this->getRankAltParams()['value']);
        $this->assertTrue($rank->getTitleFull() == $this->getRankAltParams()['titleFull']);
        $this->assertTrue($rank->getTitleShort() == $this->getRankAltParams()['titleShort']);
    }
}
