<?php
declare(strict_types = 1);

namespace Unixslayer;

interface AnagramsInterface
{
    /**
     * @param string $word
     * @param array $words
     *
     * @return array
     */
    public function resolveAnagrams(string $word, array $words): array;
}
