<?php

namespace Realvincentuche\FilamentCronpicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Realvincentuche\FilamentCronpicker\FilamentCronpicker
 */
class FilamentCronpicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Realvincentuche\FilamentCronpicker\FilamentCronpicker::class;
    }
}
