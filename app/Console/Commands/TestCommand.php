<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'do-something {--execute}';

    /**
     * @var string
     */
    protected $description = '';

    public function handle(): void
    {
        $date = (string) Carbon::today()->setTime(23, 59, 59)->subDays(1);
        // redacted
    }
}
