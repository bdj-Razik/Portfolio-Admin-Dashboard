<?php

namespace App\View\Components\ButtonModal;

use Illuminate\View\Component;

class Send extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $messageID;

    public function __construct($messageID)
    {
        //
        $this->messageID = $messageID;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-modal.send');
    }
}
