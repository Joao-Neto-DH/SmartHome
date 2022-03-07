<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatusBar extends Component
{
    /**
     * Estatos do lugar
     * 
     * @var string
     */
    public $place;
    /**
     * Valor numérico do estatos
     * 
     * @var int
     */
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($place, $value)
    {
        $this->place = $place;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.status-bar');
    }
}
