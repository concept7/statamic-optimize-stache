<?php

namespace Concept7\StatamicOptimizeStache;

use Concept7\StatamicOptimizeStache\Commands\StatamicOptimizeStacheCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
