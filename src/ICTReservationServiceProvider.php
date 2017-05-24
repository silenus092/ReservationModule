<?php

namespace ICT\reservation;

use Illuminate\Support\ServiceProvider;

class ICTReservationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('ICT\reservation\ICTReservationController');
    }
}
