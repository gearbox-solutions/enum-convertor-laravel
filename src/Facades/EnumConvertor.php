<?php

namespace GearboxSolutions\EnumConvertor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GearboxSolutions\EnumConvertor\EnumConvertor
 */
class EnumConvertor extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \GearboxSolutions\EnumConvertor\EnumConvertor::class;
    }
}
