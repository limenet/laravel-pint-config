<?php

namespace Limenet\LaravelPintConfig\Commands;

use Illuminate\Console\Command;

class LaravelPintConfigCommand extends Command
{
    public $signature = 'laravel-pint-config';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
