<?php
declare(strict_types = 1);

namespace UnixslayerTest;

use PHPUnit\Framework\TestCase;
use Unixslayer\FileNameExtractor;
use Unixslayer\FileNameExtractorInterface;

class FileNameExtractorTest extends TestCase
{
    /**
     * @var FileNameExtractorInterface
     */
    private $extractor;

    /**
     * @param string $fileName
     * @param string $expectedFileName
     *
     * @dataProvider examplesProvider
     */
    public function testFileNameExtractor(string $fileName, string $expectedFileName)
    {
        $this->assertEquals($expectedFileName, $this->extractor->extract($fileName));
    }

    /**
     * @param string $fileName
     *
     * @dataProvider invalidExamplesProvider
     */
    public function testInvalidExamples(string $fileName)
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->extractor->extract($fileName);
    }

    /**
     * @return array
     */
    public function examplesProvider(): array
    {
        return [
            ['1231231223123131_FILE_NAME.EXTENSION.OTHEREXTENSION', 'FILE_NAME.EXTENSION'],
            ['1_This_is_an_otherExample.mpg.OTHEREXTENSIONadasdassdassds34', 'This_is_an_otherExample.mpg'],
            ['1231231223123131_myFile.tar.gz2', 'myFile.tar'],
        ];
    }

    /**
     * @return array
     */
    public function invalidExamplesProvider(): array
    {
        return [
            ['1231231223123131_FILE_NAME.EXTENSION'],
            ['This_is_an_otherExample.mpg.OTHEREXTENSIONadasdassdassds34'],
            ['1231231223123131_myFile_tar.gz2'],
        ];
    }

    protected function setUp(): void
    {
        $this->extractor = new FileNameExtractor();
    }
}
