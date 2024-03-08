<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Clocks extends Component
{
    /**
     * Rendering the component
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.clocks');
    }
}
