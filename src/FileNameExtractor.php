<?php
declare(strict_types = 1);

namespace Unixslayer;

class FileNameExtractor implements FileNameExtractorInterface
{
    private const PATTERN = '/(\d+)_(.+\..+)(\..+)/i';

    /**
     * {@inheritDoc}
     *
     * @throws \InvalidArgumentException
     */
    public function extract(string $fileName): string
    {
        preg_match(self::PATTERN, $fileName, $matches);

        if (count($matches) < 4) {
            throw new \InvalidArgumentException('Input unsupported');
        }

        return $matches[2];
    }
}
