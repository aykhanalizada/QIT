<?php

namespace App\View\Components\Products\DVXPer;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DVXPerTable extends Component
{
    /**
     * Create a new component instance.
     */

    public  $dvxPerProducts;
    public function __construct($dvxPerProducts)
    {
        $this->dvxPerProducts = $dvxPerProducts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.products.d-v-x-per.d-v-x-per-table');
    }
}
