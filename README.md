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
php artisan version:increment-major
php artisan version:increment-minor
php artisan version:increment-patch
php artisan version:increment-pre-release
```
### Set (override) the version or individual values
```php
php artisan version:set 1.2.3
php artisan version:major 2
php artisan version:minor 3
php artisan version:patch 4
php artisan version:pre-release alpha.1
php artisan version:build 123
```

### Show the version
```php
php artisan version:show
```

### Get the Version class inside your code
```php
Illuminate\Support\Facades\App::make('version'); // returns an instance of PHLAK\SemVer\Version with the current version
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