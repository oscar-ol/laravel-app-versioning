<?php

namespace OscarOl\LaravelAppVersioning\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use OscarOl\LaravelAppVersioning\Traits\VersionFile;

class VersionSetMajorCommand extends Command
{
    use VersionFile;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'version:set-major {value}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set the major value. Eg. php artisan version:set-major 2';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newVersion = 'v' . App::make('version')->setMajor($this->argument('value'));
        $this->info($newVersion);
        $this->setVersionInFile($newVersion);
    }
}
