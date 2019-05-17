<?php
declare(strict_types = 1);

namespace UnixslayerTest;

use PHPUnit\Framework\TestCase;
use Unixslayer\ReversePolishNotationCalculator;
use Unixslayer\ReversePolishNotationCalculatorInterface;

class ReversePolishNotationCalculatorTest extends TestCase
{
    /**
     * @var ReversePolishNotationCalculatorInterface
     */
    private $calculator;

    public function testExamples()
    {
        $this->assertEquals(0, $this->calculator->calculate(''), "Should work with empty string");
        $this->assertEquals(3, $this->calculator->calculate('3'), "Should parse numbers");
        $this->assertEquals(3.5, $this->calculator->calculate('3.5'), "Should parse float numbers");
        $this->assertEquals(4, $this->calculator->calculate('1 3 +'), "Should support addition");
        $this->assertEquals(3, $this->calculator->calculate('1 3 *'), "Should support multiplication");
        $this->assertEquals(-2, $this->calculator->calculate('1 3 -'), "Should support subtraction");
        $this->assertEquals(2, $this->calculator->calculate('4 2 /'), "Should support division");
        $this->assertEquals(14, $this->calculator->calculate('5 1 2 + 4 * + 3 -'), "Should work with complex expressions");
        $this->assertEquals(10123, $this->calculator->calculate('10000 123 +'));
        $this->assertEquals(-2.440165, $this->calculator->calculate('-4.556 3.7743 2.7 3.1 * 1.23 / + 5 / +'));
        $this->assertEquals(1, $this->calculator->calculate('-10 -2 -0.0133333333333333333333 300 2.5 -0.002 / - 50 - * / * -1 *'));
    }

    protected function setUp(): void
    {
        $this->calculator = new ReversePolishNotationCalculator();
    }
}