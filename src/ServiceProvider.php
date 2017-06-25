<?php

namespace Seguce92\LaravelHashid\Providers;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Seguce92\LaravelHashid\Hashid;

class ServiceProvider extends IlluminateServiceProvider{

    /**
     * @method boot
     */
    public function boot()
    {
        $this->publishes([__DIR__ . 'config/laravel-hashid.php' => config_path('seguce92/laravel-hashid.php')], 'laravel-hashid');
    }

    /**
     * @method register
     * @return Hashid
     */
    public function register()
    {
        \App::singleton('hashid', function () {
            return new Hashid();
        });
    }

}
