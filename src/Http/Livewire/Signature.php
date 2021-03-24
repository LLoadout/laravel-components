<?php

namespace LLoadoutComponents\Http\Livewire;

use Livewire\Component;

class Signature extends Component
{
    public $width;
    public $height;
    public $background;
    public $name;
    public $color;

    public function mount($width, $height, $background, $name, $color)
    {
        $this->width      = $width;
        $this->height     = $height;
        $this->background = $background;
        $this->name       = $name;
        $this->color      = $color;
    }

    public function render()
    {
        return view('load::livewire.signature.signature');
    }
}
