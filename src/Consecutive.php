<?php
declare(strict_types = 1);

namespace Unixslayer;

class Consecutive
{
    /**
     * @param array $words
     * @param int $wordCount
     *
     * @return string
     */
    public function getLongestConsecutiveString(array $words, int $wordCount): string
    {
        if ($this->isInputValid($words, $wordCount)) {

        }

        return '';
    }

    /**
     * @param array $words
     * @param int $wordCount
     *
     * @return bool
     */
    private function isInputValid(array $words, int $wordCount): bool
    {
        return empty($words) || $wordCount > count($words) || $wordCount <= 0;
    }
}
