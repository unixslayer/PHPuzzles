<?php
declare(strict_types = 1);

namespace Unixslayer;

interface FileNameExtractorInterface
{
    /**
     * @param string $fileName
     *
     * @return string
     */
    public function extract(string $fileName): string;
}
