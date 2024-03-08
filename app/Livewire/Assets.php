<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Assets extends Component
{
    /**
     * Front-End Data bag
     *
     * @return array
     */
    protected function bag(): array
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
        return view('livewire.assets', $this->bag())
            ->layout('components.layouts.with-navigation');
    }
}
