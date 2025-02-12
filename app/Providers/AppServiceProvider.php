<?php

namespace App\Providers;

use Illuminate\Support\Facades\Date;
use Illuminate\Support\ServiceProvider;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;

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
        $this->configureDates();
        $this->configureModels();
    }

    private function configureDates(): void
    {
        Date::use(CarbonImmutable::class);
    }

    private function configureModels(): void
    {
        Model::shouldBeStrict(! $this->app->isProduction());
    }
}
