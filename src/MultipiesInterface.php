<?php
declare(strict_types = 1);

namespace Unixslayer;

interface MultipiesInterface
{
    /**
     * @param int $number
     *
     * @return int
     */
    public function getMultipliesSum(int $number): int;
}
