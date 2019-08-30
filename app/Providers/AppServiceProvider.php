<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       // $this->App->singleton(product::class, productRepository::class);
       

        //

       // $this->app->singleton('App', function ($app) {
       //  return new App\API($app->make('HttpClient'));});

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
