<?php

namespace OscarOl\LaravelAppVersioning;

use PHLAK\SemVer\Version;
use Illuminate\Support\ServiceProvider;
use OscarOl\LaravelAppVersioning\Traits\VersionFile;
use OscarOl\LaravelAppVersioning\Console\Commands\VersionSetCommand;
use OscarOl\LaravelAppVersioning\Console\Commands\VersionShowCommand;
use OscarOl\LaravelAppVersioning\Console\Commands\VersionSetBuildCommand;
use OscarOl\LaravelAppVersioning\Console\Commands\VersionSetMajorCommand;
use OscarOl\LaravelAppVersioning\Console\Commands\VersionSetMinorCommand;
use OscarOl\LaravelAppVersioning\Console\Commands\VersionSetPatchCommand;
use OscarOl\LaravelAppVersioning\Console\Commands\VersionSetPreReleaseCommand;
use OscarOl\LaravelAppVersioning\Console\Commands\VersionIncrementMajorCommand;
use OscarOl\LaravelAppVersioning\Console\Commands\VersionIncrementMinorCommand;
use OscarOl\LaravelAppVersioning\Console\Commands\VersionIncrementPatchCommand;
use OscarOl\LaravelAppVersioning\Console\Commands\VersionIncrementPreReleaseCommand;

class LaravelAppVersioningServiceProvider extends ServiceProvider
{
    use VersionFile;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('laravel-app-versioning.php'),
            ], 'config');

            $this->commands([
                VersionIncrementMajorCommand::class,
                VersionIncrementMinorCommand::class,
                VersionIncrementPatchCommand::class,
                VersionIncrementPreReleaseCommand::class,
                VersionSetBuildCommand::class,
                VersionSetCommand::class,
                VersionSetMajorCommand::class,
                VersionSetMinorCommand::class,
                VersionSetPatchCommand::class,
                VersionSetPreReleaseCommand::class,
                VersionShowCommand::class,

            ]);
        }

        $this->publishes(
            [
                __DIR__ . '/../version.json' => base_path('version.json'),
            ],
            ['laravel-app-versioning']
        );
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('version', function () {
            return new Version($this->getVersionFromFile());
        });
    }
}
