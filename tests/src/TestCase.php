<?php

declare(strict_types=1);

namespace Spiral\KnpMenu\Tests;

use Spiral\Boot\AbstractKernel;
use Spiral\Boot\Bootloader\ConfigurationBootloader;
use Spiral\KnpMenu\Bootloader\KnpMenuBootloader;
use Spiral\KnpMenu\Tests\App\TestApp;
use Spiral\Testing\TestableKernelInterface;
use Spiral\Testing\TestCase as BaseTest;

class TestCase extends BaseTest
{
    public function rootDirectory(): string
    {
        return __DIR__ . '/../app/';
    }

    public function defineBootloaders(): array
    {
        return [
            ConfigurationBootloader::class,
            KnpMenuBootloader::class,
        ];
    }

    /** @return TestableKernelInterface|AbstractKernel */
    public function createAppInstance(): TestableKernelInterface
    {
        return TestApp::createWithBootloaders(
            $this->defineBootloaders(),
            $this->defineDirectories($this->rootDirectory()),
            false
        );
    }
}
