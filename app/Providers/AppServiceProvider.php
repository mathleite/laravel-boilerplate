<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MongoDB\Laravel\MongoDBServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): array
    {
        return [
            MongoDBServiceProvider::class
        ];
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
