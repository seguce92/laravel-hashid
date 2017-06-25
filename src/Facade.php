<?php
namespace Seguec92\LaravelHashid;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Facade extends IlluminateFacade {

    /**
     * @method getFacadeAccessor
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'hashid';
    }

}
