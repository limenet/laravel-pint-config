<?php

namespace Limenet\LaravelPintConfig\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Limenet\LaravelPintConfig\LaravelPintConfig
 */
class LaravelPintConfig extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Limenet\LaravelPintConfig\LaravelPintConfig::class;
    }
}
