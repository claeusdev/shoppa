<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Newsletter\MailChimpNewsletter;
use App\Services\Newsletter\Contracts\NewsletterContract;

class MailChimpServiceProvider extends ServiceProvider
{
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
        $this->app->singleton(NewsletterContract::class, function($app){
            return new MailChimpNewsletter;
        });
    }
}
