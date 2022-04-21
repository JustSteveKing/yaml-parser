<?php

declare(strict_types=1);

use JustSteveKing\YamlParser\Parser;

beforeEach(fn () =>
    $this->parser = new Parser(
        file: __DIR__ . '/Fixtures/openapi.yaml',
    ),
);

it('can create a new parser', function () {
    expect(
        $this->parser,
    )->toBeInstanceOf(Parser::class);
});
