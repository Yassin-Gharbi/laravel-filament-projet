<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PropertyCard extends Component
{
    public $property; // ajouter la propriété

    /**
     * Create a new component instance.
     */
    public function __construct($property)
    {
        $this->property = $property; // stocker la propriété
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.property-card');
    }
}
