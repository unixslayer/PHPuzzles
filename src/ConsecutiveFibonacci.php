<?php
declare(strict_types = 1);

namespace Unixslayer;

class ConsecutiveFibonacci implements ConsecutiveFibonacciInterface
{
    /**
     * @var FibonacciInterface
     */
    private $fibonacci;

    /**
     * @param FibonacciInterface $fibonacci
     */
    public function __construct(FibonacciInterface $fibonacci)
    {
        $this->fibonacci = $fibonacci;
    }

    /**
     * {@inheritDoc}
     */
    public function calculate(int $product): ConsecutiveFibonacciResult
    {
        $factor = $result = $min = $max = 0;
        while ($product > $result) {
            $min = $this->fibonacci->calculate($factor);
            $max = $this->fibonacci->calculate($factor + 1);
            $result = $min * $max;
            $factor++;
        }

        return new ConsecutiveFibonacciResult($min, $max, $result === $product);
    }
}
