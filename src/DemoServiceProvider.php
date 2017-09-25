<?php
namespace Ngiasim\Facadestest;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('facadestest-demo', function() {
            return new Demo;
        });
    }
}