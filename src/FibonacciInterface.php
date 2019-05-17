<?php
declare(strict_types = 1);

namespace Unixslayer;

interface FibonacciInterface
{
    /**
     * @param int $factor
     *
     * @return int
     */
    public function calculate(int $factor): int;
}
