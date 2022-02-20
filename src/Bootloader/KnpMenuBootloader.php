<?php

declare(strict_types=1);

namespace Spiral\KnpMenu\Bootloader;

use Knp\Menu\FactoryInterface;
use Knp\Menu\Matcher\Matcher;
use Knp\Menu\Matcher\MatcherInterface;
use Knp\Menu\MenuFactory;
use Knp\Menu\Renderer\RendererInterface;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Bootloader\Views\ViewsBootloader;
use Spiral\Core\Container;
use Spiral\Config\ConfiguratorInterface;
use Spiral\KnpMenu\Config\KnpMenuConfig;
use Spiral\KnpMenu\Renderer\SpiralRenderer;

class KnpMenuBootloader extends Bootloader
{
    protected const DEPENDENCIES = [
        ViewsBootloader::class,
    ];

    protected const SINGLETONS = [
        FactoryInterface::class => MenuFactory::class,
        RendererInterface::class => SpiralRenderer::class,
        MatcherInterface::class => Matcher::class,
    ];

    public function __construct(
        private ConfiguratorInterface $config
    ) {
    }

    public function boot(Container $container): void
    {
        $this->initConfig();
    }

    private function initConfig(): void
    {
        $this->config->setDefaults(
            KnpMenuConfig::CONFIG,
            [
                'template' => '',
                'template_options' => []
            ]
        );
    }
}
