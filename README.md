# App versioning commands for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/oscar-ol/laravel-app-versioning.svg?style=flat-square)](https://packagist.org/packages/oscar-ol/laravel-app-versioning)
[![Total Downloads](https://img.shields.io/packagist/dt/oscar-ol/laravel-app-versioning.svg?style=flat-square)](https://packagist.org/packages/oscar-ol/laravel-app-versioning)

This package provides a set of commands to manage the version of your Laravel application.

It is based on the [Semantic Versioning](https://semver.org/) specification.

It uses Semantic versioning helper library [PHLAK/SemVer](https://github.com/PHLAK/SemVer) created by Chris Kankiewicz (@PHLAK) 

## Installation

You can install the package via composer:

```bash
composer require oscar-ol/laravel-app-versioning
```

## Publish the version.json file

```bash
php artisan vendor:publish --provider="OscarOl\LaravelAppVersioning\LaravelAppVersioningServiceProvider" --tag="laravel-app-versioning"
```

## Usage

### Increment the version
```php
php artisan version:increment-major         // v1.2.3 -> v2.0.0
php artisan version:increment-minor         // v1.2.3 -> v1.3.0
php artisan version:increment-patch         // v1.2.3 -> v1.2.4
php artisan version:increment-pre-release   // v1.2.3-alpha.5 -> v1.2.4-alpha.6
```
### Set (override) the version or individual values
```php
php artisan version:set 1.2.3               // v1.2.3
php artisan version:set-major 2                 // v1.2.3 -> v2.0.0
php artisan version:set-minor 3                 // v1.2.3 -> v1.3.0
php artisan version:set-patch 4                 // v1.2.3 -> v1.2.4
php artisan version:set-pre-release alpha.1     // v1.2.3 -> v1.2.3-alpha.1
php artisan version:set-build 123               // v1.2.3 -> v1.2.3+123
```

### Show the version
```php
php artisan version:show                    // v1.2.3
```

### Get the Version class inside your code
```php
// it returns an instance of PHLAK\SemVer\Version with the current version
Illuminate\Support\Facades\App::make('version');
// or
app()->make('version');

// Print the version
echo app()->make('version')->__toString();  // 1.2.3
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email info@oscarorta.es instead of using the issue tracker.

## Credits

-   [Oscar Orta](https://github.com/oscar-ol)
-   [Chris Kankiewicz](https://github.com/PHLAK) for the [PHLAK/SemVer](https://github.com/PHLAK/SemVer) library

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
