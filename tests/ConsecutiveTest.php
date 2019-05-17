<?php
declare(strict_types = 1);

namespace UnixslayerTest;

use PHPUnit\Framework\TestCase;
use Unixslayer\Consecutive;

class ConsecutiveTest extends TestCase
{
    /**
     * @var Consecutive
     */
    private $service;

    protected function setUp(): void
    {
        $this->service = new Consecutive();
    }

    /**
     * @param array $words
     * @param int $wordsCount
     * @param string $expectedString
     *
     * @dataProvider examplesProvider
     */
    public function testExamples(array $words, int $wordsCount, string $expectedString)
    {
        $this->assertEquals($expectedString, $this->service->getLongestConsecutiveString($words, $wordsCount));
    }

    /**
     * @return array
     */
    public function examplesProvider(): array
    {
        return [
            [["zone", "abigail", "theta", "form", "libe", "zas"], 2, "abigailtheta"],
            [
                ["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"],
                1,
                "oocccffuucccjjjkkkjyyyeehh"
            ],
            [[], 3, ""]
        ];
    }
}
