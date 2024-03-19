<?php

namespace App\Providers;

use App\Services\AutorServiceInterface;
use App\Services\AutorService;
use Illuminate\Support\ServiceProvider;

class ServicesProvider extends ServiceProvider
{


    public array $bindings = [

        AutorServiceInterface::class => AutorService::class,

    ];

    

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
