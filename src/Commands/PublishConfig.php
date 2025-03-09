<?php

namespace Limenet\LaravelPintConfig\Commands;

use Illuminate\Console\Command;

class PublishConfig extends Command
{
    public $signature = 'laravel-pint-config:publish';

    public $description = 'Publishes the Laravel Pint config';

    public function handle(): int
    {
        $dist = json_decode(file_get_contents($this->filename('pint.dist.json')), true);
        $local = file_exists(base_path('pint.local.json'))
            ? json_decode(file_get_contents(base_path('pint.local.json')), true)
            : [];

        $merged = $dist;
        $merged['rules'] = array_merge(
            $merged['rules'],
            $local['rules'] ?? [],
        );
        $merged['exclude'] = $local['exclude'] ?? [];
        $merged['notName'] = $local['notName'] ?? [];
        $merged['notPath'] = $local['notPath'] ?? [];

        file_put_contents(base_path('pint.json'), json_encode($merged, JSON_PRETTY_PRINT));

        $this->info('✔ Successfully published pint.json');

        return self::SUCCESS;
    }

    private function filename(string $name): string
    {
        return sprintf(__DIR__.'/../../%s', $name);
    }
}
