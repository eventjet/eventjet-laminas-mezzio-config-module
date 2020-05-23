<?php

declare(strict_types=1);

namespace Eventjet\Test\Unit\LaminasMezzioConfigModule;

use Eventjet\LaminasMezzioConfigModule\Module;
use PHPUnit\Framework\TestCase;

use function chdir;
use function dirname;

class ModuleTest extends TestCase
{
    private Module $module;

    protected function setUp(): void
    {
        parent::setUp();
        chdir(dirname(__DIR__));

        $this->module = new Module();
    }

    public function testConfigIsLoaded(): void
    {
        $config = $this->module->getConfig();

        self::assertNotEmpty($config);
        self::assertSame('bar', $config['project_settings']['foo']);
    }

    public function testDependencyKeyIsRenamedToServiceManager(): void
    {
        $config = $this->module->getConfig();

        self::assertArrayNotHasKey('dependencies', $config);
        self::assertArrayHasKey('service_manager', $config);
        self::assertArrayHasKey('factories', $config['service_manager']);
        self::assertSame('DummyService', $config['service_manager']['aliases']['DummyInterface']);
    }
}
