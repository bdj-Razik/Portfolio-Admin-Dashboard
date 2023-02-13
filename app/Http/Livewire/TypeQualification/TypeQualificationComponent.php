<?php

namespace App\Http\Livewire\TypeQualification;

use App\Models\TypeQualification;
use Illuminate\Support\Facades\Config;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TypeQualificationComponent extends Component
{
    use LivewireAlert;

    public $typeID, $name;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:55|unique:type_qualifications,name,' . $this->typeID,

        ];
    }

    public function close()
    {
        $this->resetInputs();
        $this->resetValidation();

    }

    public function resetInputs()
    {
        $this->typeID = '';
        $this->name = '';

    }

    public function updated($field)
    {
        $this->validateOnly($field);

    }

    public function store()
    {

        $this->validate();

        $typeQualification = TypeQualification::create([
            'name' => $this->name,
        ]);

        if ($typeQualification) {

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

        $typeQualification = TypeQualification::find($this->typeID);
        $typeQualification->name = $this->name;

        if ($typeQualification->update()) {

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

        if (TypeQualification::destroy($this->typeID)) {

            $this->alert('success', Config::get('custom.AlertMessage.success-destroy'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-destroy'));
        }

    }

    public function getData($typeID)
    {

        $typeQualification = TypeQualification::find($typeID);

        $this->typeID = $typeQualification->id;
        $this->name = $typeQualification->name;

    }

    public function render()
    {
        $types = TypeQualification::all();
        return view('livewire.type-qualification.type-qualification-component', ['types' => $types]);
    }
}
