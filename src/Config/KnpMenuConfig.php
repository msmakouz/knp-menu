<?php

declare(strict_types=1);

namespace Spiral\KnpMenu\Config;

use Spiral\Core\InjectableConfig;

final class KnpMenuConfig extends InjectableConfig
{
    public const CONFIG = 'knp-menu';
    protected $config = [];
}
