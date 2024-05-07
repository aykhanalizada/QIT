<?php

namespace App\View\Components\Products\DGX;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowDGXProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public $companies;
    public function __construct($companies)
    {
        $this->companies=$companies;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.products.d-g-x.show-d-g-x-product');
    }
}
