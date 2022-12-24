<?php

namespace OscarOl\LaravelAppVersioning\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use OscarOl\LaravelAppVersioning\Traits\VersionFile;

class VersionIncrementPreReleaseCommand extends Command
{
    use VersionFile;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'version:increment-pre-release';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increment the pre-release version value by one.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newVersion = 'v' . App::make('version')->incrementPreRelease();
        $this->info($newVersion);
        $this->setVersionInFile($newVersion);
    }
}
