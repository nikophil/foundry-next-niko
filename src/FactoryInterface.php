<?php

declare(strict_types=1);

namespace Zenstruck\Foundry;

/**
 * @immutable
 *
 * @template T
 *
 * @phpstan-type Parameters = array<string,mixed>
 * @phpstan-type Attributes = Parameters|callable():Parameters
 */
interface FactoryInterface
{
    /**
     * @param Attributes $attributes
     * @return T
     */
    public function create(array|callable $attributes = []): mixed;

    /**
     * @param Attributes $attributes
     */
    public function withAttributes(array|callable $attributes = []): static;

    /**
     * @param Attributes $attributes
     */
    public static function new(array|callable $attributes = []): static;

    /**
     * @param Attributes $attributes
     * @return T
     */
    public static function createOne(array|callable $attributes = []): mixed;
}
