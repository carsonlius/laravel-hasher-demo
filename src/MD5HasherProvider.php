<?php

namespace Carsonlius\Hasher;

use Illuminate\Support\ServiceProvider;

class MD5HasherProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5Hasher', function(){
            return new MD5Hasher();
        });
    }

    public function provides()
    {
        return ['md5Hasher'];
    }
}
