<?php

namespace GearboxSolutions\EnumConvertor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use GearboxSolutions\EnumConvertor\Commands\EnumConvertorCommand;

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
