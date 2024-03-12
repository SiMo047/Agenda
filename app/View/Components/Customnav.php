<?php

namespace App\View\Components;


use Illuminate\View\View;
use Illuminate\View\Component;

class Customnav extends Component
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
    public function render(): View
    {
        return view('layouts.customnav');
    }
}
