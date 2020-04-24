<?php
namespace VendorName\PackageName\Providers;

use Illuminate\Support\ServiceProvider;

class PackageNameServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap Services
     */
    public function boot()
    {
        include __DIR__ . '/../Http/routes.php';
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'helloworld');
        $this->mergeConfigFrom(dirname(__DIR__) . '/Config/system.php', 'core');
    }

    /**
     * Register Services
     */
    public function register()
    {

    }
}