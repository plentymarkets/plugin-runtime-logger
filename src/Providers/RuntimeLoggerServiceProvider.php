<?php

namespace RuntimeLogger\Providers;

use Plenty\Plugin\ServiceProvider;
use RuntimeLogger\Middlewares\RuntimeLoggerMiddleware;

class RuntimeLoggerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->addGlobalMiddleware( RuntimeLoggerMiddleware::class );
    }

    public function boot()
    {

    }
}