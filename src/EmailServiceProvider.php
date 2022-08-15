<?php

namespace Wameed\WameedEmailTheme;

use Illuminate\Support\ServiceProvider;

class EmailServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/resources/views' => resource_path('views'),]);
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
