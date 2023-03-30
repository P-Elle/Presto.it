<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $announcement;

    public function __construct($announcement)

    {
        $this->announcement=$announcement;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $announcement=$this->announcement;
        return view('components.card', compact('announcement'));
    }
}
