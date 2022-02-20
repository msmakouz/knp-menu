<?php

declare(strict_types=1);

namespace Spiral\KnpMenu\Tests\Functional\Factory;

use Knp\Menu\FactoryInterface;
use Knp\Menu\Renderer\RendererInterface;
use Spiral\Core\Container;
use Spiral\KnpMenu\Renderer\SpiralRenderer;
use Spiral\KnpMenu\Tests\TestCase;

class KnpMenuBootloaderTest extends TestCase
{
    private Container $container;

    public function setUp(): void
    {
        parent::setUp();

        $this->container = $this->getApp()->getContainer();
    }

    public function testContainerHasFactory(): void
    {
        $this->assertTrue($this->container->has(FactoryInterface::class));
        $this->assertInstanceOf(FactoryInterface::class, $this->container->get(FactoryInterface::class));
    }

    public function testContainerHasRenderer(): void
    {
        $this->assertTrue($this->container->has(RendererInterface::class));
        $this->assertInstanceOf(SpiralRenderer::class, $this->container->get(RendererInterface::class));
    }
}
