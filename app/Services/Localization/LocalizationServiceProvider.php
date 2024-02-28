<?php

namespace App\Services\Localization;

use Illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('localization', 'App\Services\Localization\Localization');
    }
}
