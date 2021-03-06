<?php

namespace Akhaled\HybridComponents;

use Illuminate\Support\ServiceProvider;
use Akhaled\HybridComponents\Traits\RegisterComponentsTrait;
use Akhaled\HybridComponents\Traits\RegisterLivewireComponentsTrait;

class HybridComponentsServiceProvider extends ServiceProvider
{
    use RegisterComponentsTrait, RegisterLivewireComponentsTrait;

    const HYBRID_COMPONENTS_DIR = __DIR__ . '/../resources/views/components';

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'hybrid-components');
        $this->bootComponentsUp();
        $this->bootLivewireComponentsUp();
    }
}