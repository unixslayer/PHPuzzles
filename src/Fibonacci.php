<?php
declare(strict_types = 1);

namespace Unixslayer;

class Fibonacci implements FibonacciInterface
{
    /**
     * @param int $factor
     *
     * @return int
     */
    public function calculate(int $factor): int
    {
        if ($factor === 0) {
            return 0;
        }

        if ($factor === 1) {
            return 1;
        }

        return $this->calculate($factor - 1) + $this->calculate($factor - 2);
    }
}
