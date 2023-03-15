<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationComponent extends Component
{

    public $refershUnreadNotifications;
    protected $listeners = ['refershUnreadNotifications' => 'refershUnreadNotifications' , 'close'];


    public function refershUnreadNotifications()
    {
        $this->refershUnreadNotifications = Auth::user()->unreadNotifications()->latest()->limit(5)->get();
    }

    public function mount()
    {

        $this->refershUnreadNotifications = Auth::user()->unreadNotifications()->latest()->limit(5)->get();

    }

    public function render()
    {

        return view('livewire.notification-component', ['unreadNotifications' => $this->refershUnreadNotifications]);
    }
}
