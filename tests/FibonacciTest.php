<?php
declare(strict_types = 1);

namespace Unixslayer;

use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    /**
     * @var FibonacciInterface
     */
    private $fibonacci;

    public function testCalculate()
    {
        $this->assertEquals(0, $this->fibonacci->calculate(0));
        $this->assertEquals(1, $this->fibonacci->calculate(1));
        $this->assertEquals(1, $this->fibonacci->calculate(2));
        $this->assertEquals(2, $this->fibonacci->calculate(3));
        $this->assertEquals(3, $this->fibonacci->calculate(4));
        $this->assertEquals(5, $this->fibonacci->calculate(5));
        $this->assertEquals(8, $this->fibonacci->calculate(6));
        $this->assertEquals(13, $this->fibonacci->calculate(7));
        $this->assertEquals(21, $this->fibonacci->calculate(8));
        $this->assertEquals(34, $this->fibonacci->calculate(9));
        $this->assertEquals(55, $this->fibonacci->calculate(10));
        $this->assertEquals(89, $this->fibonacci->calculate(11));
        $this->assertEquals(144, $this->fibonacci->calculate(12));
        $this->assertEquals(233, $this->fibonacci->calculate(13));
    }

    protected function setUp(): void
    {
        $this->fibonacci = new Fibonacci();
    }
}
