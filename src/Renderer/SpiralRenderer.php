<?php

declare(strict_types=1);

namespace Spiral\KnpMenu\Renderer;

use Knp\Menu\ItemInterface;
use Knp\Menu\Matcher\MatcherInterface;
use Knp\Menu\Renderer\RendererInterface;
use Spiral\KnpMenu\Config\KnpMenuConfig;
use Spiral\Views\ViewsInterface;

class SpiralRenderer implements RendererInterface
{
    public function __construct(
        private ViewsInterface $views,
        private MatcherInterface $matcher,
        private KnpMenuConfig $config
    ) {
    }

    public function render(ItemInterface $item, array $options = []): string
    {
        $options = \array_merge($this->config->toArray(), $options);

        $html = $this->views->render(
            $options['template'],
            ['item' => $item, 'options' => $options['template_options'], 'matcher' => $this->matcher]
        );

        if ($options['clear_matcher']) {
            $this->matcher->clear();
        }

        return $html;
    }
}
