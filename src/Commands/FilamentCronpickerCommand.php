<?php

namespace Realvincentuche\FilamentCronpicker\Commands;

use Illuminate\Console\Command;

class FilamentCronpickerCommand extends Command
{
    public $signature = 'filament-cronpicker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
