<?php

declare(strict_types=1);

return [
    'api_url' => env('SHOWCODE_API_URL', 'https://api.showcode.app'),

    'token' => env('SHOWCODE_TOKEN'),

    'settings' => [
        /**
         * The width (in pixels) of the image to create.
         *
         * Type: number
         * Default: 400
         * Requires: number|min:0
         */
        'width' => 400,

        /**
         * The height (in pixels) of the image to create.
         *
         * Type: number
         * Default: 200
         * Requires: number|min:0
         */
        'height' => 200,
    ],
];
