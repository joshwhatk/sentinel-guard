<?php

namespace Joshwhatk\Cent;

/**
 * Part of the Cent package.
 *
 * @package    Cent
 * @version    1.0.1
 * @author     joshwhatk
 * @license    MIT
 * @link       http://jwk.me
 */

use Illuminate\Support\Facades\Auth;
use Joshwhatk\Cent\Cent;
use Illuminate\Support\ServiceProvider;

class CentServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        Auth::extend('cent', function () {
            return new Cent();
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
