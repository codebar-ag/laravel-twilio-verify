# ⚠️ WIP ⚠️ Twilio Verify integration with Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codebar-ag/laravel-twilio-verify.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/laravel-twilio-verify)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/codebar-ag/laravel-twilio-verify/run-tests?label=tests)](https://github.com/codebar-ag/laravel-twilio-verify/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/codebar-ag/laravel-twilio-verify/Check%20&%20fix%20styling?label=code%20style)](https://github.com/codebar-ag/laravel-twilio-verify/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/codebar-ag/laravel-twilio-verify.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/laravel-twilio-verify)

[](delete) 1) manually replace `Ruslan Steiger, SuddenlyRust, auhor@domain.com, Codebar AG, codebar-ag, Vendor Name, laravel-twilio-verify, laravel_twilio_verify, laravel_twilio_verify, TwilioVerify, Twilio Verify integration with Laravel` with their correct values
[](delete) in `CHANGELOG.md, LICENSE.md, README.md, ExampleTest.php, ModelFactory.php, TwilioVerify.php, TwilioVerifyCommand.php, TwilioVerifyFacade.php, TwilioVerifyServiceProvider.php, TestCase.php, composer.json, create_laravel_twilio_verify_table.php.stub`
[](delete) and delete `configure-laravel_twilio_verify.sh`

[](delete) 2) You can also run `./configure-laravel_twilio_verify.sh` to do this automatically.

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
