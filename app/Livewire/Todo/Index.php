<?php

namespace App\Livewire\Todo;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    /**
     * User entrance
     *
     * @var string $task
     */
    public string $task = '';

    /**
     * User task list
     *
     * @var array $tasks
     */
    public array $tasks = [];

    /**
     * Add user entered task
     *
     * @return void
     */
    public function addTask(): void
    {
        $this->tasks[] = $this->task;
        $this->reset('task');
    }

    /**
     * Reset all tasks
     *
     * @return void
     */
    public function resetTasks(): void
    {
        $this->reset();
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
    #[Layout('components.layouts.with-navigation')]
    public function render(): View
    {
        return view('livewire.todo.index', $this->bag());
    }
}
