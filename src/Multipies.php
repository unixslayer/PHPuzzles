<?php
declare(strict_types = 1);

namespace Unixslayer;

class Multipies implements MultipiesInterface
{
    /**
     * {@inheritDoc}
     */
    public function getMultipliesSum(int $number): int
    {
        return array_sum(
            array_reduce(
                range(1, $number - 1),
                function (array $carrier, int $digit) {
                    if ($digit % 3 == 0 || $digit % 5 == 0) {
                        $carrier[] = $digit;
                    }

                    return $carrier;
                },
                []
            )
        );
    }
}
