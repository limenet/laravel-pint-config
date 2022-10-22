<?php

namespace Limenet\LaravelPintConfig\Commands;

use Illuminate\Console\Command;

class PublishConfig extends Command
{
    public $signature = 'laravel-pint-config:publish';

    public $description = 'Publishes the Laravel Pint config';

    public function handle(): int
    {
        $this->call('vendor:publish', [
            '--tag' => 'laravel-pint-config',
            '--force' => true,
        ]);

        return self::SUCCESS;
    }
}
