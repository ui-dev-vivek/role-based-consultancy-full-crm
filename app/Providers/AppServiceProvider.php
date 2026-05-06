<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // Register custom Blade directives for permission checks
        \Illuminate\Support\Facades\Blade::if('permission', function ($permission) {
            return auth()->check() && auth()->user()->hasPermission($permission);
        });

        \Illuminate\Support\Facades\Blade::if('role', function ($role) {
            return auth()->check() && auth()->user()->hasRole($role);
        });

        \Illuminate\Support\Facades\Blade::if('anyPermission', function (...$permissions) {
            return auth()->check() && auth()->user()->hasAnyPermission($permissions);
        });

        // Register Observers
        // \App\Models\User::observe(\App\Observers\UserObserver::class);
    }
}
