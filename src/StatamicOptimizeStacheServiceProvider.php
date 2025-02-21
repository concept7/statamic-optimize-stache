<?php

namespace Concept7\StatamicOptimizeStache;

use Concept7\StatamicOptimizeStache\Commands\StatamicOptimizeStacheCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class StatamicOptimizeStacheServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('statamic-optimize-stache');
    }
}
