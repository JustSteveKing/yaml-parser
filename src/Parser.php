<?php

declare(strict_types=1);

namespace JustSteveKing\YamlParser;

use JustSteveKing\YamlParser\Exceptions\ParserException;
use Symfony\Component\Yaml\Yaml;

final class Parser
{
    public function __construct(
        private readonly string $file,
        private array $contents = [],
    ) {}

    /**
     * @return mixed
     */
    public function raw(): mixed
    {
        return Yaml::parseFile(
            filename: $this->file,
        );
    }

    public function boot(): void
    {
        $this->contents = $this->raw();
    }

    public function paths(): array
    {
        return $this->get(
            key: 'paths',
        );
    }

    public function get(string $key): mixed
    {
        if (! isset($this->contents[$key])) {
            throw new ParserException(
                message: "Failed to find key [$key] in file [$this->file]",
            );
        }

        return $this->contents[$key];
    }

    public function file(): string
    {
        return $this->file;
    }

    public function contents(): array
    {
        return $this->contents;
    }
}
