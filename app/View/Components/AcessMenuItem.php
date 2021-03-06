<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AcessMenuItem extends Component
{
    public $img;
    public $title;
    public $since;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $img, $since)
    {
        $this->title = $title;
        $this->since = $since; 
        $this->img   = $img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.acess-menu-item');
    }
}
