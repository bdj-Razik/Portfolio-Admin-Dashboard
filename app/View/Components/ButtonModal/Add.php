<?php

namespace App\View\Components\ButtonModal;

use Illuminate\View\Component;

class Add extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $nameModal;

    public function __construct($nameModal)
    {
        //
        $this->nameModal = $nameModal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-modal.add');
    }
}
