<?php

namespace OscarOl\LaravelAppVersioning\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

class VersionShowCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'version:show';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the current version.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('v' . App::make('version'));
    }
}
