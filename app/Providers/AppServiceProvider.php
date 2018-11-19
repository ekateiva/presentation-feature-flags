<?php

namespace App\Providers;

use App\Services\FeatureFlag\ConfigFeature;
use App\Services\FeatureFlag\Feature;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Feature::class, ConfigFeature::class);
    }
}
