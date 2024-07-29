<?php

namespace App\View\Components\MainProducts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CreateProduct extends Component
{
    /**
     * Create a new component instance.
     */

    public $categories,$products;
    public function __construct($products,$categories)
    {
        $this->categories = $categories;
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-products.create-product');
    }
}
