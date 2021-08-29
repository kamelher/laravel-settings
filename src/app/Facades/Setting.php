<?php

namespace KAMEL\Settings\app\Facades;

use Illuminate\Support\Facades\Facade;
use KAMEL\Settings\app\SettingsHelper;


class Setting extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return SettingsHelper::class;
    }
}