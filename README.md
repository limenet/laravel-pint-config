# Laravel Pint Config

[![Latest Version on Packagist](https://img.shields.io/packagist/v/limenet/laravel-pint-config.svg?style=flat-square)](https://packagist.org/packages/limenet/laravel-pint-config)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/limenet/laravel-pint-config/run-tests.yml?label=tests)](https://github.com/limenet/laravel-pint-config/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/limenet/laravel-pint-config/fix-php-code-style-issues.yml?label=code%20style)](https://github.com/limenet/laravel-pint-config/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/limenet/laravel-pint-config.svg?style=flat-square)](https://packagist.org/packages/limenet/laravel-pint-config)

## Installation

You can install the package via composer:

```bash
composer require limenet/laravel-pint-config
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-pint-config-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```bash
php artisan laravel-pint-config:publish
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Linus Metzler](https://github.com/limenet)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
