<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//for Passport 
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
     /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
        Passport::routes();
    }
}
