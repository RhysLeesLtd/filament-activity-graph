<?php

namespace RhysLeesLtd\FilamentActivityGraph\Commands;

use Illuminate\Console\Command;

class FilamentActivityGraphCommand extends Command
{
    public $signature = 'filament-activity-graph';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
