<?php

declare(strict_types=1);

namespace Zenstruck\Foundry;

/**
 * @template T of object
 * @extends AbstractFactory<T>
 */
abstract class AbstractObjectFactory extends AbstractFactory
{
    abstract public function class(): string;

    public static function createOne(array|callable $attributes = []): mixed
    {
    }

    public function create(array|callable $attributes = []): object
    {

    }
}
