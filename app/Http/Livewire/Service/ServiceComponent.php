<?php

namespace App\Http\Livewire\Service;

use App\Models\Client;
use App\Models\Service;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceComponent extends Component
{

    use LivewireAlert, WithFileUploads;

    public $serviceID, $title, $description, $image;

    protected function rules()
    {
        return [
            'title' => 'required|string|max:55|unique:services,title,' . $this->serviceID,
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:png,jpeg,jpg',

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
        $this->image = '';

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

            $service = new Service();

            $service->title = $this->title;
            $service->description = $this->description;

            if ($this->image) {

                if ($this->image->storeAs('img-service/', $this->image->getClientOriginalName())) {

                    $service->image = $this->image->getClientOriginalName();

                } else {

                    DB::rollBack();

                    $this->alert('warning', Config::get('custom.AlertMessage.error-add'));

                    return;
                }

            }

            $service->save();

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

            $service = Service::find($this->serviceID);
            $service->title = $this->title;
            $service->description = $this->description;

            if ($this->image) {

                if ($this->image->storeAs('img-service/', $this->image->getClientOriginalName())) {

                    $service->image = $this->image->getClientOriginalName();

                } else {

                    DB::rollBack();

                    $this->alert('warning', Config::get('custom.AlertMessage.error-update'));

                    return;
                }

            }

            $service->update();

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

        return view('livewire.service.service-component', ['services' => Service::all()]);
    }
}
