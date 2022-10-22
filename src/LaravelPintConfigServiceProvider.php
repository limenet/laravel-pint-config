<?php

namespace Limenet\LaravelPintConfig;

use Limenet\LaravelPintConfig\Commands\PublishConfig;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPintConfigServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-pint-config')
            ->hasConfigFile()
            ->hasMigration('create_laravel-pint-config_table')
            ->hasCommand(PublishConfig::class);
    }

    public function packageBooted()
    {
        $this->publishes([
            __DIR__.'/../pint.dist.json' => base_path('pint.json'),
        ], 'laravel-pint-config');
    }
}
