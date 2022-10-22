<?php

namespace Limenet\LaravelPintConfig;

use Limenet\LaravelPintConfig\Commands\LaravelPintConfigCommand;
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
            ->hasViews()
            ->hasMigration('create_laravel-pint-config_table')
            ->hasCommand(LaravelPintConfigCommand::class);
    }
}
