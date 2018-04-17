<?php

namespace Lameck\Lexcept;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; 

class LexceptServiceProvider extends ServiceProvider
{
   /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->loadViewsFrom (__DIR__."/./../resources/views","Lameck\Lexcept");
    }
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
