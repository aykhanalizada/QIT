<?php

namespace App\View\Components\Products\DVXTopdan;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DVXTopdanTable extends Component
{
    /**
     * Create a new component instance.
     */

    public $dvxTopdanProducts;
    public function __construct($dvxTopdanProducts)
    {
        $this->dvxTopdanProducts = $dvxTopdanProducts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.products.d-v-x-topdan.d-v-x-topdan-table');
    }
}
