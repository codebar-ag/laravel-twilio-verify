<?php

namespace CodebarAg\TwilioVerify;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TwilioVerifyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-twilio-verify')
            ->hasConfigFile();
    }
}
