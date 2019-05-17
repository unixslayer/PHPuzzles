<?php
declare(strict_types = 1);

namespace Unixslayer;

interface ConsecutiveInterface
{
    /**
     * @param array $words
     * @param int $wordCount
     *
     * @return string
     */
    public function getLongestConsecutiveString(array $words, int $wordCount): string;
}
