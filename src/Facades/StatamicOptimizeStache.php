<?php

namespace Concept7\StatamicOptimizeStache\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Concept7\StatamicOptimizeStache\StatamicOptimizeStache
 */
class StatamicOptimizeStache extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Concept7\StatamicOptimizeStache\StatamicOptimizeStache::class;
    }
}
