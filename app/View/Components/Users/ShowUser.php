<?php

namespace App\View\Components\Users;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowUser extends Component
{
    /**
     * Create a new component instance.
     */
    public $companies;
    public $users;

    public function __construct($companies,$users)
    {
        $this->companies=$companies;
        $this->users=$users;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users.show-user');
    }
}
