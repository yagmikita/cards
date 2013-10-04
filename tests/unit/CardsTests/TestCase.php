<?php

namespace CardsTests;

use Aura\Di\Container;
use Aura\Di\Forge;
use Aura\Di\Config;

class TestCase extends \PHPUnit_Framework_TestCase
{
    protected $config;
    protected $di;

    public function setUp()
    {
        $this->di = new Container(new Forge(new Config));
        $this->config = require TEST_FILES_DIR . '/config-test.php';
    }

    public function tearDown()
    {
        $this->config = [];
    }
}
