<?php

namespace App\Http\Livewire\Freelance;

use App\Models\Freelance;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class FreelanceComponent extends Component
{

    use LivewireAlert, WithFileUploads , WithPagination;

    public $freelanceID, $title, $url, $image;

    protected function rules()
    {
        return [
            'title' => 'required|string|max:55|unique:freelances,title,' . $this->freelanceID,
            'url' => 'required|url',
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
        $this->freelanceID = '';
        $this->title = '';
        $this->url = '';
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

            $freelance = new Freelance();

            $freelance->title = $this->title;
            $freelance->url = $this->url;


            if ($this->image) {

                if ($this->image->storeAs('img-freelance/', $this->image->getClientOriginalName())) {

                    $freelance->image = $this->image->getClientOriginalName();

                } else {

                    DB::rollBack();

                    $this->alert('warning', Config::get('custom.AlertMessage.error-add'));

                    return;
                }

            }

            $freelance->save();

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

            $freelance = Freelance::find($this->freelanceID);
            $freelance->title = $this->title;
            $freelance->url = $this->url;


            if ($this->image) {

                if ($this->image->storeAs('img-freelance/', $this->image->getClientOriginalName())) {

                    $freelance->image = $this->image->getClientOriginalName();

                } else {

                    DB::rollBack();

                    $this->alert('warning', Config::get('custom.AlertMessage.error-update'));

                    return;
                }

            }

            $freelance->update();

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

        if (Freelance::destroy($this->freelanceID)) {

            $this->alert('success', Config::get('custom.AlertMessage.success-destroy'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-destroy'));
        }

    }

    public function getData($freelanceID)
    {

        $freelance = Freelance::find($freelanceID);

        $this->freelanceID = $freelance->id;
        $this->title = $freelance->title;
        $this->url = $freelance->url;

     }




    public function render()
    {
        return view('livewire.freelance.freelance-component', ['freelances' => Freelance::simplePaginate(15)]);
    }
}
