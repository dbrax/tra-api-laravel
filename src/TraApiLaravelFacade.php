<?php

namespace Epmnzava\TraApiLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Epmnzava\TraApiLaravel\Skeleton\SkeletonClass
 */
class TraApiLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tra';
    }
}
