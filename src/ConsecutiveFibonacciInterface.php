<?php
declare(strict_types = 1);

namespace Unixslayer;

interface ConsecutiveFibonacciInterface
{
    /**
     * @param int $product
     *
     * @return ConsecutiveFibonacciResult
     */
    public function calculate(int $product): ConsecutiveFibonacciResult;
}
