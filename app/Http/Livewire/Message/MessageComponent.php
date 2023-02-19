<?php

namespace App\Http\Livewire\Message;

use App\Models\ContactMe;
use Livewire\Component;
use Livewire\WithPagination;

class MessageComponent extends Component
{
    use WithPagination;
    public $messageID = 0, $full_name, $title, $email, $description;

    public function resetInputs()
    {
        $this->messageID = 0;
        $this->full_name = '';
        $this->title = '';
        $this->email = '';
        $this->description = '';

    }

    public function close()
    {
        $this->resetInputs();

    }

    public function getData($MessageID)
    {

        $message = ContactMe::find($MessageID);

        $this->messageID = $message->id;
        $this->full_name = $message->name;
        $this->title = $message->title;
        $this->email = $message->email;
        $this->description = $message->description;

    }

    public function render()
    {
        return view('livewire.message.message-component', ['messages' => ContactMe::simplePaginate(15)]);
    }
}
