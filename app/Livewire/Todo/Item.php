<?php

namespace App\Livewire\Todo;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Item extends Component
{
    /**
     * Task title
     *
     * @var string $task
     */
    public string $task = '';

    /**
     * Task status
     *
     * @var bool $isDone
     */
    public bool $isDone = false;

    /**
     * Toggle task status
     *
     * @return void
     */
    public function toggle(): void
    {
        $this->isDone = !$this->isDone;
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
        return view('livewire.todo.item', $this->bag());
    }
}
