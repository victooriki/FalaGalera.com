<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatsChamado extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $status,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $color = 'blue';
        $color = $this->status === 'c' ? 'green' : $color;
        $color = $this->status === 'b' ? 'red' : $color;
        $textStatus = getStatsChamados($this->status);

        return view('components.stats-chamado', compact('textStatus', 'color'));
    }
}
