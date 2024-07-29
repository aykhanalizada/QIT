<?php

namespace App\View\Components\Measures;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CreateMeasure extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.measures.create-measure');
    }
}
