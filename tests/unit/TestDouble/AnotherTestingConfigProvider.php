<?php

declare(strict_types=1);

namespace Eventjet\Test\Unit\LaminasMezzioConfigModule\TestDouble;

final class AnotherTestingConfigProvider
{
    /**
     * @return array<string, mixed>
     */
    public function __invoke(): array
    {
        return [
            'project_settings' => [
                'foo' => 'bar',
            ],
        ];
    }
}
