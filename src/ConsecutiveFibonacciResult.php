<?php
declare(strict_types = 1);

namespace Unixslayer;

class ConsecutiveFibonacciResult
{
    /**
     * @var int
     */
    private $min;

    /**
     * @var int
     */
    private $max;

    /**
     * @var bool
     */
    private $exact;

    /**
     * @param int $min
     * @param int $max
     * @param bool $exact
     */
    public function __construct(int $min, int $max, bool $exact)
    {
        $this->min = $min;
        $this->max = $max;
        $this->exact = $exact;
    }

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * @return bool
     */
    public function isExact(): bool
    {
        return $this->exact;
    }
}
