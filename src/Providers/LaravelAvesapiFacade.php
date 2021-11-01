<?php

namespace WDevs\LaravelAvesapi\Providers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WDevs\LaravelAvesapi\Skeleton\SkeletonClass
 */
class LaravelAvesapiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-avesapi';
    }
}
