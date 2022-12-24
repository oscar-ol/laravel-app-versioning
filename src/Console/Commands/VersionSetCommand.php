<?php

namespace OscarOl\LaravelAppVersioning\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use OscarOl\LaravelAppVersioning\Traits\VersionFile;

class VersionSetCommand extends Command
{
    use VersionFile;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'version:set {version}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set a new version. Eg. php artisan version:set v1.2.3';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newVersion = 'v' . App::make('version')->setVersion($this->argument('version'));
        $this->info($newVersion);
        $this->setVersionInFile($newVersion);
    }
}
