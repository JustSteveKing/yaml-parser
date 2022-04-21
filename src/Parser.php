<?php

declare(strict_types=1);

namespace JustSteveKing\YamlParser;

final class Parser
{
    public function __construct(
        private readonly string $file,
    ) {}

    public function file(): string
    {
        return $this->file;
    }
}
