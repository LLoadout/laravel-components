<?php namespace LLoadoutComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Livewire;
use LLoadoutComponents\Http\Livewire\BarChart;
use LLoadoutComponents\Http\Livewire\LineChart;
use LLoadoutComponents\Http\Livewire\PieChart;


class LLoadoutComponentsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->bootResources();
        $this->bootLivewireComponents();
        $this->bootBladeComponents();
        $this->bootDirectives();

    }

    protected function bootResources()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'load');
    }

    protected function bootBladeComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            Blade::component('load::blade.charts.barchart', "load-barchart");
            Blade::component('load::blade.charts.piechart', "load-piechart");
            Blade::component('load::blade.charts.linechart', "load-linechart");
            Blade::component('load::blade.forms.select', "load-select");
        });
    }

    protected function bootLivewireComponents()
    {
        Livewire::component('barchart', BarChart::class);
        Livewire::component('piechart', PieChart::class);
        Livewire::component('linechart', LineChart::class);
    }

    private function bootDirectives(): void
    {
        Blade::directive('lloadoutScripts', function () {
            return "<?php echo LLoadoutComponents\\LLoadoutComponents::outputScripts(); ?>";
        });
    }
}
