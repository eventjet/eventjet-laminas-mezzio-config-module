<?php

/**
 * Add your ConfigProvider classes here. Every provider will be loaded and its config returned.
 */

declare(strict_types=1);

use Eventjet\Test\Unit\LaminasMezzioConfigModule\TestDouble\AnotherTestingConfigProvider;
use Eventjet\Test\Unit\LaminasMezzioConfigModule\TestDouble\TestingConfigProvider;

return [
    TestingConfigProvider::class,
    AnotherTestingConfigProvider::class,
];
