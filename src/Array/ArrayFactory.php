<?php

declare(strict_types=1);

namespace Zenstruck\Foundry\Array;

use Zenstruck\Foundry\AbstractFactory;

/**
 * @extends AbstractFactory<array>
 */
abstract class ArrayFactory extends AbstractFactory
{
    public function create(array|callable $attributes = []): array
    {
    }

    public static function createOne(callable|array $attributes = []): array
    {
    }
}
