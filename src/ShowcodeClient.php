<?php

declare(strict_types=1);

namespace Enlight\Showcode;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\ConnectionException;

final class ShowcodeClient
{
    use HasFake;

    private string $url;
    private string $token;

    public function __construct()
    {
        $this->url = config('showcode.api_url');

        $this->token = config('showcode.token');
    }

    /**
     * @throws ConnectionException
     */
    public function generate(array $editors, array $overriddenSettings = []): PromiseInterface|Response
    {
        $settings = array_merge(config('showcode.settings'), $overriddenSettings);

        $parameters = [
            'settings' => $settings,
            'editors' => $editors,
        ];

        return Http::withToken($this->token)
            ->acceptJson()
            ->post($this->url . '/generate', $parameters);
    }
}
