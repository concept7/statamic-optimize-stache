<?php

namespace Concept7\StatamicOptimizeStache;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class StatamicOptimizeStacheServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('statamic-optimize-stache');
    }

    public function bootingPackage()
    {
        if ($this->app->runningInConsole()) {
            $this->optimizes(
                optimize: 'statamic:stache:warm',
                clear: 'statamic:stache:clear',
                key: 'stache'
            );
        }
    }
}
