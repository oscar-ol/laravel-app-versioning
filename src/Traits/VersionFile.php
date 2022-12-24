<?php

namespace OscarOl\LaravelAppVersioning\Traits;

trait VersionFile
{
    /**
     * Get the version from the version.json file.
     *
     * @return string
     */
    public function getVersionFromFile()
    {
        $version = json_decode(file_get_contents(base_path('version.json')), true);

        return $version['version'];
    }

    /**
     * Set the version in the version.json file.
     *
     * @param string $version
     *
     * @return void
     */
    public function setVersionInFile($version)
    {
        file_put_contents(base_path('version.json'), json_encode(['version' => $version], JSON_PRETTY_PRINT));
    }
}
