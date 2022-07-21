<?php

declare(strict_types=1);

namespace WebGarden\Termite\Concerns;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class DefinesProperties extends Concern
{
    public function __construct(
        public ?string $name = null,
        public ?string $version = null,
        public ?string $description = null,
        public ?string $page = null,
        public ?array $requires = null,
        public ?array $uses = null,
        public string|array|null $author = null,
        public ?string $contact = null,
        public ?string $url = null
    ) {
    }
}
