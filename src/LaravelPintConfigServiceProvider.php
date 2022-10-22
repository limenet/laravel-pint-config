<?php

namespace Limenet\LaravelPintConfig;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Limenet\LaravelPintConfig\Commands\LaravelPintConfigCommand;

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
