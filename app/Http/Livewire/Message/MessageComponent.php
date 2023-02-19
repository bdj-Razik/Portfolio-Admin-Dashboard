<?php

namespace App\Http\Livewire\Message;

use App\Models\ContactMe;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class MessageComponent extends Component
{
    use LivewireAlert, WithPagination;

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

        if ($notification = Auth::user()->unreadNotifications()->whereJsonContains('data->messagerie->id', $this->messageID)->first()) {

            $notification->markAsRead();
            $this->emit('refershUnreadNotifications');

        }

    }

    public function destroy()
    {

        DB::beginTransaction();

        try {

            ContactMe::destroy($this->messageID);
            DatabaseNotification::whereJsonContains('data->messagerie->id', $this->messageID)->delete();

            DB::commit();
            $this->alert('success', Config::get('custom.AlertMessage.success-destroy'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } catch (\Throwable$th) {

            DB::rollBack();

            $this->alert('warning', Config::get('custom.AlertMessage.error-destroy'));

        }

    }

    public function render()
    {
        return view('livewire.message.message-component', ['messages' => ContactMe::simplePaginate(15)]);
    }
}
