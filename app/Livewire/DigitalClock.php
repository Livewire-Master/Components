<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class DigitalClock extends Component
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
        return view('livewire.digital-clock', $this->bag());
    }
}
