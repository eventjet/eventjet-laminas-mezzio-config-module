<?php

declare(strict_types=1);

namespace Eventjet\LaminasMezzioConfigModule;

use Laminas\ConfigAggregator\ConfigAggregator;

final class Module
{
    /**
     * @return array<string, mixed>
     */
    public function getConfig(): array
    {
        $providers = require 'config/mezzio-modules.config.php';
        $config = (new ConfigAggregator($providers))->getMergedConfig();
        $config['service_manager'] = $config['dependencies'] ?? [];
        unset($config['dependencies']);
        return $config;
    }
}
