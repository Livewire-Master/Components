<?php

namespace App\Livewire;

use Livewire\Component;

class SimpleClock extends Component
{
    public function render(): string
    {
        return <<<'HTML'
        <div>
            <p style="color: mediumaquamarine; font-weight: bold;">{{ time() }}</p>
        </div>
        HTML;
    }
}
