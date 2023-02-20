<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ClientComponent extends Component
{

    use LivewireAlert, WithFileUploads , WithPagination;

    public $clientID, $full_name, $email, $phone, $period, $description, $photo;

    protected function rules()
    {
        return [
            'full_name' => 'required|string|max:55|unique:clients,full_name,' . $this->clientID,
            'email' => 'required|email|unique:clients,email,' . $this->clientID,
            'phone' => 'required|numeric|unique:clients,email,' . $this->clientID,
            'photo' => 'nullable|image|mimes:png,jpeg,jpg',

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
        $this->photo = '';

    }

    public function updated($field)
    {
        $this->validateOnly($field);

    }

    public function store()
    {

        $this->validate();

        DB::beginTransaction();

        try {

            $client = new Client();

            $client->full_name = $this->full_name;
            $client->email = $this->email;
            $client->phone = $this->phone;

            if ($this->photo) {

                if ($this->photo->storeAs('img-client/', $this->photo->getClientOriginalName())) {

                    $client->photo = $this->photo->getClientOriginalName();

                } else {

                    DB::rollBack();

                    $this->alert('warning', Config::get('custom.AlertMessage.error-add'));

                    return;
                }

            }

            $client->save();

            DB::commit();

            $this->alert('success', Config::get('custom.AlertMessage.success-add'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } catch (\Throwable$th) {

            DB::rollBack();

            $this->alert('warning', Config::get('custom.AlertMessage.error-add'));

        }

    }

    public function update()
    {

        $this->validate();

        DB::beginTransaction();

        try {

            $client = Client::find($this->clientID);
            $client->full_name = $this->full_name;
            $client->email = $this->email;
            $client->phone = $this->phone;

            if ($this->photo) {

                if ($this->photo->storeAs('img-client/', $this->photo->getClientOriginalName())) {

                    $client->photo = $this->photo->getClientOriginalName();

                } else {

                    DB::rollBack();

                    $this->alert('warning', Config::get('custom.AlertMessage.error-update'));

                    return;
                }

            }

            $client->update();

            DB::commit();

            $this->alert('success', Config::get('custom.AlertMessage.success-update'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } catch (\Throwable$th) {

            DB::rollBack();

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
        return view('livewire.client.client-component', ['clients' => Client::simplePaginate(15)]);
    }
}
