# This is my package filament-activity-graph

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rhysleesltd/filament-activity-graph.svg?style=flat-square)](https://packagist.org/packages/rhysleesltd/filament-activity-graph)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/rhysleesltd/filament-activity-graph/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/rhysleesltd/filament-activity-graph/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rhysleesltd/filament-activity-graph/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rhysleesltd/filament-activity-graph/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rhysleesltd/filament-activity-graph.svg?style=flat-square)](https://packagist.org/packages/rhysleesltd/filament-activity-graph)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require rhysleesltd/filament-activity-graph
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-activity-graph-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-activity-graph-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-activity-graph-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentActivityGraph = new RhysLeesLtd\FilamentActivityGraph();
echo $filamentActivityGraph->echoPhrase('Hello, RhysLeesLtd!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rhys Lees](https://github.com/RhysLeesLtd)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
