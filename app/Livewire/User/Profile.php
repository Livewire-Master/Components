<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('.::User Profile::.')]
class Profile extends Component
{
    /**
     * Current User
     *
     * @var User $user
     */
    public User $user;

    /**
     * Mount the component
     *
     * @param User $user
     *
     * @return void
     */
    public function mount(User $user): void
    {
        $this->user = $user;
    }

    /**
     * Front-End Data bag
     *
     * @return array
     */
    protected function bag(): array
    {
        return [
            'users' => User::all()
        ];
    }

    /**
     * Render the component view
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.user.profile', $this->bag())
            ->layout('components.layouts.with-navigation')
        ;
    }
}
