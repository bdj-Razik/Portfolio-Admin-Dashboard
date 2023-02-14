<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Loader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $target;

    public function __construct($target = null)
    {
        //
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.loader');
    }
}
