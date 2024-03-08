<?php

namespace App\Livewire\Post;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{
    /**
     * Post title
     *
     * @var string $title
     */
    public string $title = '';

    /**
     * Post Description
     *
     * @var string $description
     */
    public string $description = '';


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
        return view('livewire.post.create', $this->bag());
    }
}
