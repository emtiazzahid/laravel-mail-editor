<?php

namespace EmtiazZahid\MailEclipse\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use EmtiazZahid\MailEclipse\MailEclipseServiceProvider;

/**
 * @doesNotPerformAssertions
 */
class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            MailEclipseServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.key', 'base64:3DszFwOYlOo1Lg6ZgT+WDdPpKXu/3E+OoFb3A1AcfzM=');
        $app['config']->set('app.env', 'testing');

        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }
}
