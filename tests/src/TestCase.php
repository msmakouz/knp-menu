<?php

declare(strict_types=1);

namespace Spiral\KnpMenu\Tests;

use Spiral\Boot\Bootloader\ConfigurationBootloader;
use Spiral\KnpMenu\Bootloader\KnpMenuBootloader;
use Spiral\Testing\TestCase as BaseTest;

class TestCase extends BaseTest
{
    public function rootDirectory(): string
    {
        return __DIR__.'/../';
    }

    public function defineBootloaders(): array
    {
        return [
            ConfigurationBootloader::class,
            KnpMenuBootloader::class,
            // ...
        ];
    }
}
