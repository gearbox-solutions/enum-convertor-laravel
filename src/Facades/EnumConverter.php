<?php

namespace GearboxSolutions\EnumConverter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GearboxSolutions\EnumConverter\EnumConverter
 */
class EnumConverter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \GearboxSolutions\EnumConverter\EnumConverter::class;
    }
}
