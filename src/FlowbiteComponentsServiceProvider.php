<?php

namespace RichardEszes\FlowbiteComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use RichardEszes\FlowbiteComponents\Views\Components\Form\Input;

class FlowbiteComponentsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'flowbite');

        Blade::componentNamespace('RichardEszes\\FlowbiteComponents\\Views\\Components', 'flowbite');
    }
}
