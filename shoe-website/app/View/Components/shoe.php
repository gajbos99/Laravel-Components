<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class shoe extends Component
{
    public $shoe;
    
    public function __construct($shoe)
    {
        $this->shoe = $shoe;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shoe');
    }
}
