<?php

declare(strict_types=1);

namespace Zenstruck\Foundry;

/**
 * @template T of object
 * @implements FactoryInterface<T>
 *
 * @phpstan-import-type Parameters from FactoryInterface
 */
abstract class AbstractFactory implements FactoryInterface
{
    abstract protected function getDefaults(): array;

    public static function new(array|callable $attributes = []): static
    {
    }

    public function withAttributes(array|callable $attributes = []): static
    {

    }

    /**
     * @return Parameters
     */
    protected function normalizeAttributes(): array
    {
    }

    final protected function addState(array|callable $attributes = []): static
    {
    }

    protected function initialize(): static
    {
        return $this;
    }
}
