<?php namespace LLoadoutComponents;

use App\Http\Livewire\Roles;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;


class LLoadoutComponentsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->bootResources();
        $this->bootBladeComponents();
    }

    protected function bootResources()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'load');
    }

    protected function bootBladeComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerComponent('select');
        });
    }

    protected function registerComponent(string $component)
    {
        Blade::component('load::components.'.$component, "load-".$component);
    }
}
