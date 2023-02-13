<?php

namespace App\View\Components\ButtonModal;

use Illuminate\View\Component;

class DeleteAction extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $objectID, $nameModal;

    public function __construct($objectID, $nameModal)
    {
        //
        $this->objectID = $objectID;

        $this->nameModal = $nameModal;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-modal.delete-action');
    }
}
