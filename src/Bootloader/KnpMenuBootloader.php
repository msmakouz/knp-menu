<?php

declare(strict_types=1);

namespace Spiral\KnpMenu\Bootloader;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Core\Container;
use Spiral\Config\ConfiguratorInterface;
use Spiral\KnpMenu\Config\KnpMenuConfig;

class KnpMenuBootloader extends Bootloader
{
    public function __construct(private ConfiguratorInterface $config)
    {
    }

    public function boot(Container $container): void
    {
        $this->initConfig();

    }

    public function start(Container $container): void
    {
    }

    private function initConfig(): void
    {
        $this->config->setDefaults(
            KnpMenuConfig::CONFIG,
            []
        );
    }
}
