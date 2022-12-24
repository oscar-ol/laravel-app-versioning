<?php

namespace OscarOl\LaravelAppVersioning\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use OscarOl\LaravelAppVersioning\Traits\VersionFile;

class VersionSetMinorCommand extends Command
{
    use VersionFile;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'version:set-minor {value}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set the minor value. Eg. php artisan version:set-minor 2';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newVersion = 'v' . App::make('version')->setMinor($this->argument('value'));
        $this->info($newVersion);
        $this->setVersionInFile($newVersion);
    }
}
