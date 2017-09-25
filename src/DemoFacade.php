<?php
namespace Ngiasim\Facadestest;

use Illuminate\Support\Facades\Facade;

class DemoFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'facadestest-demo';
    }
}