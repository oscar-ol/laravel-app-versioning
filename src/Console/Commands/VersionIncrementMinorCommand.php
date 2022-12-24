<?php

namespace OscarOl\LaravelAppVersioning\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use OscarOl\LaravelAppVersioning\Traits\VersionFile;

class VersionIncrementMinorCommand extends Command
{
    use VersionFile;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'version:increment-minor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increment the minor version value by one.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newVersion = 'v' . App::make('version')->incrementMinor();
        $this->info($newVersion);
        $this->setVersionInFile($newVersion);
    }
}
