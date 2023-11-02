<?php
namespace Packages\Http\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class HttpServiceProvider extends ServiceProvider
{

    public function boot (Router $router)
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/route.php');

        $this->loadViewsFrom(__DIR__.'/../Resources/views','http');
    }
}
