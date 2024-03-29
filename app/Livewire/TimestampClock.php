<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class TimestampClock extends Component
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
        return view('livewire.timestamp-clock', $this->bag());
    }
}
