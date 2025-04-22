# Enum Convertor for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/likeadeckofcards/enum-convertor-laravel.svg?style=flat-square)](https://packagist.org/packages/likeadeckofcards/enum-convertor-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/likeadeckofcards/enum-convertor-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/likeadeckofcards/enum-convertor-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/likeadeckofcards/enum-convertor-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/likeadeckofcards/enum-convertor-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/likeadeckofcards/enum-convertor-laravel.svg?style=flat-square)](https://packagist.org/packages/likeadeckofcards/enum-convertor-laravel)

This package adds a command that will take PHP enums and turn them into TS/JS enums for use in frontend development.

## Installation

You can install the package via composer:

```bash
composer require --dev likeadeckofcards/enum-convertor-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="enum-convertor-laravel-config"
```

This is the contents of the published config file:

```php
return [
    /*
     * relative paths from the project root
     */
    'enum_paths' => [
        'app/Enums' => 'resources/js/types/enums',
        // 'input/folder' => 'output/folder'
    ],

    /*
     * extension to use for the enum files
     */
    'enum_extension' => '.ts',
];
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

- [Michael Deck](https://github.com/6399755+likeadeckofcards)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
