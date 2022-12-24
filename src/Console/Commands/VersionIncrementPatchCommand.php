<?php

namespace OscarOl\LaravelAppVersioning\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use OscarOl\LaravelAppVersioning\Traits\VersionFile;

class VersionIncrementPatchCommand extends Command
{
    use VersionFile;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'version:increment-patch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increment the patch version value by one.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newVersion = 'v' . App::make('version')->incrementPatch();
        $this->info($newVersion);
        $this->setVersionInFile($newVersion);
    }
}
