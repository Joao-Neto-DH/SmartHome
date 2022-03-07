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
     * Unidade de medida
     * 
     * @var string
     */
    public $unity;
    /**
     * Símbolo que representa o sentido do crescimento
     * 
     * @var char
     */
    public $grow;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($place, $value, $unity, $grow)
    {
        $this->place = $place;
        $this->value = $value;
        $this->unity = $unity;
        $this->grow = $grow;
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
