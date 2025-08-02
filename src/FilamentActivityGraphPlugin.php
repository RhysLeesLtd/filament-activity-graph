<?php

namespace RhysLeesLtd\FilamentActivityGraph;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentActivityGraphPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-activity-graph';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
