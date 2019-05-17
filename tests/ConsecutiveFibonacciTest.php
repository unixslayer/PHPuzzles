<?php
declare(strict_types = 1);

namespace UnixslayerTest;

use PHPUnit\Framework\TestCase;
use Unixslayer\ConsecutiveFibonacci;
use Unixslayer\ConsecutiveFibonacciInterface;
use Unixslayer\Fibonacci;

class ConsecutiveFibonacciTest extends TestCase
{
    /**
     * @var ConsecutiveFibonacciInterface
     */
    private $calculator;

    /**
     * @param int $product
     * @param int $min
     * @param int $max
     * @param bool $exact
     *
     * @dataProvider basicsProvider
     */
    public function testBasics(int $product, int $min, int $max, bool $exact)
    {
        $result = $this->calculator->calculate($product);

        $this->assertEquals($min, $result->getMin());
        $this->assertEquals($max, $result->getMax());
        $this->assertEquals($exact, $result->isExact());
    }

    /**
     * @return array
     */
    public function basicsProvider(): array
    {
        return [
            [4895, 55, 89, true],
            [5895, 89, 144, false],
            [74049690, 6765, 10946, true],
            [84049690, 10946, 17711, false],
            [193864606, 10946, 17711, true],
            [447577, 610, 987, false],
            [602070, 610, 987, true],
        ];
    }

    protected function setUp(): void
    {
        $this->calculator = new ConsecutiveFibonacci(new Fibonacci());
    }


}