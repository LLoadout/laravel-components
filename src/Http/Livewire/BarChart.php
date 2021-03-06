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
    public $chartkey;
    public $updated = false;

    public function mount($data = [], $labels = [], $orientation = 'vertical', $title = '', $chartkey = '')
    {
        $this->data        = $this->transformData($data);
        $this->labels      = $labels;
        $this->orientation = ($orientation == 'vertical') ? false : true;
        $this->title       = $title;
        $this->chartkey    = $chartkey;
        $this->chartid     = $this->id;
    }

    public function render()
    {
        if ($this->shouldSkipRender) {
            return;
        }
        return view('load::livewire.charts.barchart');
    }

    private function transformData(array $data)
    {
        if (is_array($data[0])) {
            return collect($data)->map(function ($set) {
                return ['data' => $set];
            })->toArray();
        } else {
            return [['data' => $data]];
        }


    }
}
