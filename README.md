<img src="https://banners.beyondco.de/Laravel%20Twilio%20Verify.png?theme=light&packageManager=composer+require&packageName=codebar-ag%2Flaravel-twilio-verify&pattern=signal&style=style_1&description=An+opinionated+way+to+integrate+Twilio+Verify+with+Laravel&md=1&showWatermark=0&fontSize=175px&images=badge-check">

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codebar-ag/laravel-twilio-verify.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/laravel-twilio-verify)
[![Total Downloads](https://img.shields.io/packagist/dt/codebar-ag/laravel-twilio-verify.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/laravel-twilio-verify)
[![run-tests](https://github.com/codebar-ag/laravel-twilio-verify/actions/workflows/run-tests.yml/badge.svg)](https://github.com/codebar-ag/laravel-twilio-verify/actions/workflows/run-tests.yml)
[![Psalm](https://github.com/codebar-ag/laravel-twilio-verify/actions/workflows/psalm.yml/badge.svg)](https://github.com/codebar-ag/laravel-twilio-verify/actions/workflows/psalm.yml)
[![Check & fix styling](https://github.com/codebar-ag/laravel-twilio-verify/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/codebar-ag/laravel-twilio-verify/actions/workflows/php-cs-fixer.yml)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require codebar-ag/laravel_twilio_verify
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="CodebarAg\TwilioVerify\TwilioVerifyServiceProvider" --tag="laravel_twilio_verify-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="CodebarAg\TwilioVerify\TwilioVerifyServiceProvider" --tag="laravel_twilio_verify-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel_twilio_verify = new CodebarAg\TwilioVerify();
echo $laravel_twilio_verify->echoPhrase('Hello, Spatie!');
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

- [Ruslan Steiger](https://github.com/SuddenlyRust)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
