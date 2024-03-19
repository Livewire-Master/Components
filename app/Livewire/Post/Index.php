<?php

namespace App\Livewire\Post;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
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
            ->layout('components.layouts.with-navigation')
            ->title('.::Posts::.')
            ->response(
                static function (Response $response)
                {
                    $response->header('X-MY-SECRET-HEADER', 'V3RY-$ECR3T');
                }
            )
        ;
    }
}
