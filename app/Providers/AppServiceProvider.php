<?php

namespace App\Providers;

use App\Models\Content;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $global = Content::where('section', 'global')
        ->pluck('value', 'field')
        ->toArray();

        View::share('global', $global);
    }
}
