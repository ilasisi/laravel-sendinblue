<?php

namespace Ilasisi\SendInBlue\Commands;

use Illuminate\Console\Command;

class SendInBlueCommand extends Command
{
    public $signature = 'laravel-sendinblue';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
