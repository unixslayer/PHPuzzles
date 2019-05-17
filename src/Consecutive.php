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
        if ($this->isInputInvalid($words, $wordCount)) {
            return '';
        }

        $currentResult = '';
        $wordsCount = count($words);
        for ($i = 0; $i < $wordsCount; $i++) {
            $result = implode('', array_slice($words, $i, $wordCount));
            $currentResult = (strlen($result) > strlen($currentResult)) ? $result : $currentResult;
        }

        return $currentResult;
    }

    /**
     * @param array $words
     * @param int $wordCount
     *
     * @return bool
     */
    private function isInputInvalid(array $words, int $wordCount): bool
    {
        return empty($words) || $wordCount > count($words) || $wordCount <= 0;
    }
}
