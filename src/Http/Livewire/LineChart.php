<?php

namespace LLoadoutComponents\Http\Livewire;

use Livewire\Component;

class LineChart extends Component
{
    public $labels;
    public $data;
    public $title;
    public $chartid;

    public function mount($data = [], $labels = [], $title = '')
    {
        $this->data    = $data;
        $this->labels  = $labels;
        $this->title   = $title;
        $this->chartid = $this->id;
    }


    public function render()
    {
        if ($this->shouldSkipRender) {
            return;
        }
        return view('load::livewire.charts.linechart');
    }
}
