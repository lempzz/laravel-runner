<?php

namespace Lempzz\LaravelRunner\Providers;

use Illuminate\Support\ServiceProvider;
use Lempzz\LaravelRunner\Commands\RunnerStart;

class LaravelRunnerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            RunnerStart::class
        ]);
    }
}
