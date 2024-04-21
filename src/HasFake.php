<?php

declare(strict_types=1);

namespace Enlight\Showcode;

use Illuminate\Support\Facades\Http;

trait HasFake
{
    /**
     * Proxies a fake call to Illuminate\Http\Client\Factory::fake()
     *
     * @param null|callable|array $callback
     * @return void
     */
    public static function fake($callback = null): void
    {
        Http::fake($callback);
    }
}
