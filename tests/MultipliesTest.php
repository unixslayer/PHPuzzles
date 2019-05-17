<?php
declare(strict_types = 1);

namespace UnixslayerTest;

use PHPUnit\Framework\TestCase;
use Unixslayer\Multipies;
use Unixslayer\MultipiesInterface;

class MultipliesTest extends TestCase
{
    /**
     * @var MultipiesInterface
     */
    private $service;

    public function testBasics()
    {
        $this->assertEquals(23, $this->service->getMultipliesSum(10));
    }

    protected function setUp(): void
    {
        $this->service = new Multipies();
    }
}
