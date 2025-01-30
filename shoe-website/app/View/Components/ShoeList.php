<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShoeList extends Component
{
    public $shoes;
    public $title;
    
    public function __construct($title, $shoes)
    {
        $this->title = $title;
        $this->shoes = $shoes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shoe-list');
    }
}
