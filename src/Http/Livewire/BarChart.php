<?php
namespace LLoadoutComponents\Http\Livewire;

use Livewire\Component;

class BarChart extends Component
{
    public $labels;
    public $data;
    public $orientation;
    public $title;
    public $chartid;
    public $updated = false;

    public function mount($data = [], $labels = [], $orientation = 'vertical', $title = '')
    {
        $this->data        = $data;
        $this->labels      = $labels;
        $this->orientation = ($orientation == 'vertical') ? false : true;
        $this->title       = $title;
        $this->chartid     = $this->id;
    }

    public function render()
    {
        if ($this->shouldSkipRender) {
            return;
        }
        return view('load::livewire.charts.barchart');
    }
}
