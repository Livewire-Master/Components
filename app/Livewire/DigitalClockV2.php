<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class DigitalClockV2 extends Component
{
    /**
     * Front-End Data bag
     *
     * @return array
     */
    public function bag(): array
    {
        return [];
    }

    /**
     * Render the component view
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.digital-clock-v2', $this->bag());
    }
}
