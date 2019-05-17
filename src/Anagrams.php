<?php
declare(strict_types = 1);

namespace Unixslayer;

class Anagrams
{
    /**
     * @param string $word
     * @param string[] $anagram
     *
     * @return string[]
     */
    public function resolveAnagrams(string $word, array $words): array
    {
        return array_values(
            array_filter(
                $words,
                function (string $anagram) use ($word) {
                    return (count_chars($word, 1) == count_chars($anagram, 1));
                }
            )
        );
    }
}
