<?php

declare(strict_types=1);

namespace Eventjet\Test\Unit\LaminasMezzioConfigModule\TestDouble;

final class TestingConfigProvider
{
    /**
     * @return array<string, mixed>
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                'aliases' => [
                    'DummyInterface' => 'DummyService',
                ],
                'factories' => [
                    'DummyService' => 'DummyServiceFactory',
                ],
            ],
        ];
    }
}
