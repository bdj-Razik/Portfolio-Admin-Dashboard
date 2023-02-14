<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use Illuminate\Support\Facades\Config;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ClientComponent extends Component
{

    use LivewireAlert;

    public $clientID, $full_name, $email, $phone, $period, $description;

    protected function rules()
    {
        return [
            'full_name' => 'required|string|max:55|unique:clients,full_name,' . $this->clientID,
            'email' => 'required|email|unique:clients,email,' . $this->clientID,
            'phone' => 'required|numeric|unique:clients,email,' . $this->clientID,
        ];
    }

    public function close()
    {
        $this->resetInputs();
        $this->resetValidation();

    }

    public function resetInputs()
    {
        $this->clientID = '';
        $this->full_name = '';
        $this->email = '';
        $this->phone = '';

    }

    public function updated($field)
    {
        $this->validateOnly($field);

    }

    public function store()
    {

        $this->validate();

        $client = Client::create([
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        if ($client) {

            $this->alert('success', Config::get('custom.AlertMessage.success-add'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-add'));

        }

    }

    public function update()
    {

        $this->validate();

        $client = Client::find($this->clientID);
        $client->full_name = $this->full_name;
        $client->email = $this->email;
        $client->phone = $this->phone;

        if ($client->update()) {

            $this->alert('success', Config::get('custom.AlertMessage.success-update'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-update'));

        }

    }

    public function destroy()
    {

        $this->validate();

        if (Client::destroy($this->clientID)) {

            $this->alert('success', Config::get('custom.AlertMessage.success-destroy'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-destroy'));
        }

    }

    public function getData($clientID)
    {

        $client = Client::find($clientID);

        $this->clientID = $client->id;
        $this->full_name = $client->full_name;
        $this->email = $client->email;
        $this->phone = $client->phone;
    }

    public function render()
    {
        return view('livewire.client.client-component', ['clients' => Client::all()]);
    }
}
