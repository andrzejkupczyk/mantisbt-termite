<?php

declare(strict_types=1);

namespace WebGarden\Termite;

use ReflectionAttribute;
use ReflectionClass;
use WebGarden\Termite\Concerns\Concern;

trait HasConcerns
{
    /**
     * @var \WebGarden\Termite\Concerns\Concern[]
     */
    protected array $cachedConcerns = [];

    protected function concern(string $concern): ?Concern
    {
        return $this->concerns()[$concern] ?? null;
    }

    protected function concerns(): array
    {
        if (!empty($this->cachedConcerns)) {
            return $this->cachedConcerns;
        }

        $attributes = (new ReflectionClass(get_called_class()))
            ->getAttributes(Concern::class, ReflectionAttribute::IS_INSTANCEOF);

        $concerns = [];

        foreach ($attributes as $attribute) {
            $concerns[$attribute->getName()] = $attribute->newInstance();
        }

        return $this->cachedConcerns = $concerns;
    }
}
