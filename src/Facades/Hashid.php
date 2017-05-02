<?php

    /*
     * -------------------------------------------------------------------------------
     * "THE BEER-WARE LICENSE" (Revision 42):
     * <kissparadigm@gmail.com> wrote this file. As long as you retain this notice you
     * can do whatever you want with this stuff. If we meet some day, and you think
     * this stuff is worth it, you can buy me a beer in return KissParadigm
     * -------------------------------------------------------------------------------
     */

    namespace KissParadigm\LaravelHashid\Facades;

    use Illuminate\Support\Facades\Facade;

    class Hashid extends Facade {

        protected static function getFacadeAccessor() {
            return 'hashid';
        }

    }
