<?php

namespace App\Http\Livewire\Qualification;

use App\Models\Qualification;
use App\Models\TypeQualification;
use Illuminate\Support\Facades\Config;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class QualificationComponent extends Component
{

    use LivewireAlert, WithPagination;

    public $qualificationID, $title, $company_or_institue, $location, $type, $start_date, $end_date;
    protected $listeners = [ 'close'];

    protected function rules()
    {
        return [
            'title' => 'required|string|max:55',
            'company_or_institue' => 'required|string|max:55',
            'location' => 'required|string|max:55',
            'type' => 'required|integer|exists:type_qualifications,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',

        ];
    }

    public function close()
    {
        $this->resetInputs();
        $this->resetValidation();

    }

    public function resetInputs()
    {
        $this->qualificationID = '';
        $this->title = '';
        $this->company_or_institue = '';
        $this->location = '';
        $this->type = '';
        $this->start_date = '';
        $this->end_date = '';

    }

    public function updated($field)
    {
        $this->validateOnly($field);

    }

    public function store()
    {

        $this->validate();

        $qualification = Qualification::create([
            'title' => $this->title,
            'company_or_institue' => $this->company_or_institue,
            'location' => $this->location,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'type_qualification_id' => $this->type,
        ]);

        if ($qualification) {

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

        $qualification = Qualification::find($this->qualificationID);

        $qualification->title = $this->title;
        $qualification->company_or_institue = $this->company_or_institue;
        $qualification->location = $this->location;
        $qualification->start_date = $this->start_date;
        $qualification->end_date = $this->end_date;
        $qualification->type_qualification_id = $this->type;

        if ($qualification->update()) {

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

        if (Qualification::destroy($this->qualificationID)) {

            $this->alert('success', Config::get('custom.AlertMessage.success-destroy'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-destroy'));
        }

    }

    public function getData($qualificationID)
    {

        $qualification = Qualification::find($qualificationID);

        $this->qualificationID = $qualification->id;
        $this->title = $qualification->title;
        $this->company_or_institue = $qualification->company_or_institue;
        $this->location = $qualification->location;
        $this->start_date = $qualification->start_date;
        $this->end_date = $qualification->end_date;
        $this->type = $qualification->type_qualification_id;

    }

    public function render()
    {

        return view('livewire.qualification.qualification-component', ['qualifications' => Qualification::simplePaginate(15), 'types' => TypeQualification::select('id', 'name')->get()]);
    }
}
