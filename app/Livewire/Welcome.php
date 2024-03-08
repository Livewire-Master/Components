<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Welcome extends Component
{
    /**
     * User email
     *
     * @var string $email
     */
    public string $email = '';

    /**
     * Mounting the component
     *
     * @param string $email
     *
     * @return void
     */
    public function mount(string $email): void
    {
        $this->email = strtoupper($email);
    }

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
        return view('livewire.welcome', $this->bag())
            ->title(".::Welcome $this->email::.")
        ;
    }
}
