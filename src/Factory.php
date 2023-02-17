<?php

declare(strict_types=1);

namespace Zenstruck\Foundry;

use Zenstruck\Foundry\Persistence\PersistenceFactoryInterface;
use Zenstruck\Foundry\Persistence\Proxy;

/**
 * @template T of object
 * @extends AbstractObjectFactory<T>
 * @implements PersistenceFactoryInterface<T>
 *
 * @phpstan-import-type Parameters from FactoryInterface
 */
abstract class Factory extends AbstractObjectFactory implements PersistenceFactoryInterface
{
    private PersistenceFactoryInterface $persistenceFactory;

    private static Configuration $configuration;

    public function __construct()
    {
        $this->persistenceFactory = self::$configuration->getPersistenceFactory($this->class());
    }

    /**
     * @param Parameters $attributes
     *
     * @return T&Proxy
     */
    final public static function findOrCreate(array $attributes): object
    {
    }

    /**
     * @return T&Proxy
     */
    final public static function first(string $sortedField = 'id'): object
    {
    }

    /**
     * @return T&Proxy
     */
    final public static function last(string $sortedField = 'id'): object
    {
    }

    /**
     * @param Parameters $attributes
     *
     * @return T&Proxy
     */
    final public static function random(array $attributes): object
    {
    }

    /**
     * @param Parameters $attributes
     *
     * @return T&Proxy
     */
    final public static function randomOrCreate(array $attributes): object
    {
    }

    /**
     * @param Parameters|mixed $attributes
     *
     * @return T&Proxy
     */
    final public static function get(mixed $attributes): object
    {
    }

    final public static function count(array $criteria = []): int
    {
    }

    final public static function truncate(): void
    {
    }
}
