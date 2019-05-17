<?php
declare(strict_types = 1);

namespace UnixslayerTest;

use PHPUnit\Framework\TestCase;
use Unixslayer\Anagrams;
use Unixslayer\AnagramsInterface;

final class AnagramsTest extends TestCase
{
    /**
     * @var AnagramsInterface
     */
    private $anagramService;

    /**
     * @param string $word
     * @param array $anagrams
     * @param array $expectedAnagrams
     *
     * @dataProvider examplesProvider
     */
    public function testExamples(string $word, array $anagrams, array $expectedAnagrams)
    {
        $this->assertEquals($expectedAnagrams, $this->anagramService->resolveAnagrams($word, $anagrams));
    }

    /**
     * @return array
     */
    public function examplesProvider(): array
    {
        return [
            ['a', ['a', 'b', 'c', 'd'], ['a']],
            [
                'racer',
                ['carer', 'arcre', 'carre', 'racrs', 'racers', 'arceer', 'raccer', 'carrer', 'cerarr'],
                ['carer', 'arcre', 'carre']
            ],
            ['abba', ['aabb', 'abcd', 'bbaa', 'dada'], ['aabb', 'bbaa']],
            ['racer', ['crazer', 'carer', 'racar', 'caers', 'racer'], ['carer', 'racer']],
            ['laser', ['lazing', 'lazy', 'lacer'], []],
        ];
    }

    protected function setUp(): void
    {
        $this->anagramService = new Anagrams();
    }
}
