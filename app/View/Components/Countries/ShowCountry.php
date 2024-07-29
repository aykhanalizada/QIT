<?php

namespace App\View\Components\Countries;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowCountry extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $countries){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.countries.show-country');
    }
}
