<?php

namespace App\View\Components\Companies;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditCompany extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $companies)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.companies.edit-company');
    }
}
