<?php

namespace Concept7\StatamicOptimizeStache;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Concept7\StatamicOptimizeStache\Commands\StatamicOptimizeStacheCommand;

class StatamicOptimizeStacheServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('statamic-optimize-stache')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_statamic_optimize_stache_table')
            ->hasCommand(StatamicOptimizeStacheCommand::class);
    }
}
