<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

/*#[Layout('components.layouts.with-navigation')]*/
#[Title('.::Clocks::.')]
class Clocks extends Component
{
    /**
     * Rendering the component
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.clocks')
            ->extends('layouts.master')
            ->section('app')
        ;
    }
}
