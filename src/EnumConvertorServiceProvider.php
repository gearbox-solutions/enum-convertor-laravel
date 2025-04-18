<?php

namespace GearboxSolutions\EnumConvertor;

use GearboxSolutions\EnumConvertor\Commands\EnumConvertorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EnumConvertorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('enum-convertor-laravel')
            ->hasConfigFile()
            ->hasCommand(EnumConvertorCommand::class);
    }
}
