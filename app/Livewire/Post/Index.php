<?php

namespace App\Livewire\Post;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
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
        return view('livewire.post.index', $this->bag())
            ->layout('components.layouts.with-navigation');
    }
}
