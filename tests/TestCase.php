<?php

namespace Limenet\LaravelPintConfig\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Limenet\LaravelPintConfig\LaravelPintConfigServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Limenet\\LaravelPintConfig\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelPintConfigServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-pint-config_table.php.stub';
        $migration->up();
        */
    }
}
