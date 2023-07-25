<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class task extends ServiceProvider
{
    protected $fillable = ['title', 'description', 'due_date'];
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
    }
}
