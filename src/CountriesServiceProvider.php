<?php

namespace Ziad181\DatabaseOfCountriesAndCities;

use Illuminate\Support\ServiceProvider;

class CountriesServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/resources/views' => resource_path('views/Mails'),]);
        $this->publishes([__DIR__ . '/config/email.php' => config_path('email.php'),]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
