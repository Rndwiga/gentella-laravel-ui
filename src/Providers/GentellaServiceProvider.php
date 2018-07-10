<?php

namespace Rndwiga\UiGentella\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Rndwiga\UiGentella\ModuleHelper;
use Tyondo\MenuGenerator\TyondoMenuGeneratorServiceProvider;

class GentellaServiceProvider extends ServiceProvider
{
    protected static $packageName = 'gentella';

    protected $providers = [
        GentellaRouteServiceProvider::class,
        TyondoMenuGeneratorServiceProvider::class,
    ];

    protected $aliases = [
        //'Charts' => Charts::class,
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(ModuleHelper::getViews(), self::$packageName);
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerServiceProviders();
        $this->registerAliases();
        $this->registerConfigs();
    }


    private function registerServiceProviders()
    {
        foreach ($this->providers as $provider)
        {
            $this->app->register($provider);
        }
    }
    private function registerAliases()
    {
        $loader = AliasLoader::getInstance();
        foreach ($this->aliases as $key => $alias)
        {
            $loader->alias($key, $alias);
        }
    }
    private function registerConfigs()
    {
        $this->mergeConfigFrom(
            ModuleHelper::getConfig(), self::$packageName
        );
    }
}
