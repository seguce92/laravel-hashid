<?php

    /*
     * -------------------------------------------------------------------------------
     * "THE BEER-WARE LICENSE" (Revision 42):
     * <kissparadigm@gmail.com> wrote this file. As long as you retain this notice you
     * can do whatever you want with this stuff. If we meet some day, and you think
     * this stuff is worth it, you can buy me a beer in return KissParadigm
     * -------------------------------------------------------------------------------
     */

    namespace KissParadigm\LaravelHashid\Providers;

    use KissParadigm\LaravelHashid\Libraries\Hashid;
    use KissParadigm\LaravelPackage\Providers\ServiceProvider as KissParadigmServiceProvider;

    class ServiceProvider extends KissParadigmServiceProvider {

        public function boot() {
            $this->setPackage('laravel-hashid', __DIR__ . '/../../res');
            parent::boot();
        }

        public function register() {
            parent::register();
            \App::singleton('hashid', function () {
                return new Hashid();
            });
        }

    }
