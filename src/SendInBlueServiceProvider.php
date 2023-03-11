<?php

namespace Ilasisi\SendInBlue;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SendInBlueServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-sendinblue')
            ->hasConfigFile();
    }
}
