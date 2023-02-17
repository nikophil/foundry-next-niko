<?php

declare(strict_types=1);

namespace Zenstruck\Foundry;

use Zenstruck\Foundry\Persistence\PersistenceFactoryInterface;

final class Configuration /*implements ServiceLocator*/
{
    /**
     * @param class-string $class
     * @throws PersistenceFactoryNotFound
     */
    public function getPersistenceFactory(string $class): PersistenceFactoryInterface
    {

    }
}
