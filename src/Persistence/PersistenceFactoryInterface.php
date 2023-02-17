<?php

declare(strict_types=1);

namespace Zenstruck\Foundry\Persistence;

use Zenstruck\Foundry\FactoryInterface;

/**
 * @template T of object
 *
 * @phpstan-import-type Parameters from FactoryInterface
 */
interface PersistenceFactoryInterface
{
    /**
     * @param Parameters $attributes
     *
     * @return T&Proxy
     */
    public static function findOrCreate(array $attributes): object;

    /**
     * @return T&Proxy
     */
    public static function first(string $sortedField = 'id'): object;

    /**
     * @return T&Proxy
     */
    public static function last(string $sortedField = 'id'): object;

    /**
     * @param Parameters $attributes
     *
     * @return T&Proxy
     */
    public static function random(array $attributes): object;

    /**
     * @param Parameters $attributes
     *
     * @return T&Proxy
     */
    public static function randomOrCreate(array $attributes): object;

    /**
     * @param Parameters|mixed $attributes
     *
     * @return T&Proxy
     */
    public static function get(mixed $attributes): object;

    public static function count(array $criteria = []): int;

    public static function truncate(): void;
}
