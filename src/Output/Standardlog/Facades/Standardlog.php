<?php

namespace Output\Standardlog\Facades;

use Illuminate\Support\Facades\Facade;

class Standardlog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'standardlog';
    }
}