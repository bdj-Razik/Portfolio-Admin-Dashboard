<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Illuminate\Support\Facades\Config;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ServiceComponent extends Component
{

    use LivewireAlert;

    public $serviceID, $title, $description;

    protected function rules()
    {
        return [
            'title' => 'required|string|max:55|unique:services,title,' . $this->serviceID,
            'description' => 'required|string',
        ];
    }

    public function close()
    {
        $this->resetInputs();
        $this->resetValidation();

    }

    public function resetInputs()
    {
        $this->serviceID = '';
        $this->title = '';
        $this->description = '';

    }

    public function updated($field)
    {
        $this->validateOnly($field);

    }


    public function store()
    {

        $this->validate();

        $service = Service::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        if ($service) {

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

        $service = Service::find($this->serviceID);
        $service->title = $this->title;
        $service->description = $this->description;

        if ($service->update()) {

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

        if (Service::destroy($this->serviceID)) {

            $this->alert('success', Config::get('custom.AlertMessage.success-destroy'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-destroy'));
        }

    }

    public function getData($serviceID)
    {

        $service = Service::find($serviceID);

        $this->serviceID = $service->id;
        $this->title = $service->title;
        $this->description = $service->description;

    }



    public function render()
    {
        $services = Service::all();
        return view('livewire.service.service-component', ['services' => $services]);
    }
}
