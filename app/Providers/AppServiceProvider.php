<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        Passport::tokensCan([
            'check-user' => 'Check your logged in user`s details',
            'place-orders'=>'Place orders'
        ]);
        // this would be default scope for the all the users that dont ask
        // Passport::setDefaultScope([
        //     'check-user',
        // ]);
    }
}
