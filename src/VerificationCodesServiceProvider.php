<?php

namespace AnyImage\VerificationCodes;

use Illuminate\Support\ServiceProvider;

class VerificationCodesServiceProvider extends ServiceProvider {
    /**
     * Register services.
     *
     * @return  void
     */
    public function register() {

        if ($this->app->runningInConsole()) {
        $this->publishes([
        __DIR__.'/../config/config.php' => config_path('verification-codes.php'),
        ], 'config');
        }

    }

    /**
     * Bootstrap services.
     *
     * @return  void
     */
    public function boot() {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'verification-codes');
    }
}
