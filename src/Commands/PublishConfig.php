<?php

namespace Limenet\LaravelPintConfig\Commands;

use Illuminate\Console\Command;

class PublishConfig extends Command
{
    public $signature = 'laravel-pint-config:publish';

    public $description = 'Publishes the Laravel Pint config';

    public function handle(): int
    {
        if (! file_exists($this->filename('pint.dist.json.orig'))) {
            copy($this->filename('pint.dist.json'), $this->filename('pint.dist.json.orig'));
        }

        $dist = json_decode(file_get_contents($this->filename('pint.dist.json.orig')), true);
        $local = file_exists(base_path('pint.local.json'))
            ? json_decode(file_get_contents(base_path('pint.local.json')), true)
            : [];

        $merged = $dist;
        $merged['rules'] = [
            ...$merged['rules'],
            ...($local['rules'] ?? []),
        ];

        file_put_contents($this->filename('pint.dist.json'), json_encode($merged, JSON_PRETTY_PRINT));

        $this->call('vendor:publish', [
            '--tag' => 'laravel-pint-config',
            '--force' => true,
        ]);

        return self::SUCCESS;
    }

    private function filename(string $name): string
    {
        return sprintf(__DIR__.'/../../%s', $name);
    }
}
