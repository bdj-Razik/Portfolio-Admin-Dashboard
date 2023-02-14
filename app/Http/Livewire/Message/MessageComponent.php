<?php

namespace App\Http\Livewire\Message;

use App\Models\ContactMe;
use Livewire\Component;

class MessageComponent extends Component
{
    public function render()
    {
        return view('livewire.message.message-component', ['messages' => ContactMe::all()]);
    }
}
