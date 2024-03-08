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
        return [
            'ip'    => request()->ip(),
            'posts' => [
                [
                    'id'          => 1,
                    'title'       => 'Title #1',
                    'description' => 'Description #1',
                ],
                [
                    'id'          => 2,
                    'title'       => 'Title #2',
                    'description' => 'Description #2',
                ],
                [
                    'id'          => 3,
                    'title'       => 'Title #3',
                    'description' => 'Description #3',
                ],
                [
                    'id'          => 4,
                    'title'       => 'Title #4',
                    'description' => 'Description #4',
                ],
            ],
        ];
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
