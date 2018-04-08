<?php

namespace Difel\HTTPResponses;

use Illuminate\Support\ServiceProvider;

class HTTPResponsesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang/en/response.php', 'http-responses');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
