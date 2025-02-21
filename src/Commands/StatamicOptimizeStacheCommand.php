<?php

namespace Concept7\StatamicOptimizeStache\Commands;

use Illuminate\Console\Command;

class StatamicOptimizeStacheCommand extends Command
{
    public $signature = 'statamic-optimize-stache';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
