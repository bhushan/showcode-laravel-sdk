<?php

declare(strict_types=1);

namespace Enlight\ShowCode\Providers;

use Enlight\Showcode\ShowcodeClient;
use Illuminate\Support\ServiceProvider;

class ShowcodeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/showcode.php', 'showcode');

        $this->app->singleton(ShowcodeClient::class, fn () => new ShowcodeClient());
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../../config/showcode.php' => config_path('showcode.php'),], 'config');
        }
    }
}
