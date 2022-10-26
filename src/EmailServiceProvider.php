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
        $this->loadViewsFrom(__DIR__.'/resources/views/Mails', 'courier');

        $this->publishes([__DIR__.'/resources/views/Mails' => resource_path('views/wameed/email')]);

        $this->publishes([__DIR__ . '/../config/email.php' => config_path('wameed/email.php'),]);
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
