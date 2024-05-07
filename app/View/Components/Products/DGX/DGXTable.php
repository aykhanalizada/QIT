<?php

namespace App\View\Components\Products\DGX;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DGXTable extends Component
{
    /**
     * Create a new component instance.
     */

    public $dgxProducts;
    public function __construct($dgxProducts)
    {
        $this->dgxProducts=$dgxProducts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.products.d-g-x.d-g-x-table');
    }
}
