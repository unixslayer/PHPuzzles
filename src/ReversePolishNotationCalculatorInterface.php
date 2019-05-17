<?php
declare(strict_types = 1);

namespace Unixslayer;

interface ReversePolishNotationCalculatorInterface
{
    /**
     * @param string $expression
     *
     * @return float
     */
    public function calculate(string $expression): float;
}
