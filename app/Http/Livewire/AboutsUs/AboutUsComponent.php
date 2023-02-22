<?php

namespace App\Http\Livewire\AboutsUs;

use App\Models\AboutUs;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutUsComponent extends Component
{
    use LivewireAlert, WithFileUploads;


    public $title, $first_name, $last_name, $email, $phone, $github, $linkedin, $twitter, $facebook, $adresse, $description, $cv, $logo;

    protected $rules = [

        'title' => 'required|string|max:55',

        'first_name' => 'required|string|max:55',
        'last_name' => 'required|string|max:55',

        'email' => 'required|email',
        'phone' => 'required|numeric',

        'github' => 'nullable|url|max:255',
        'linkedin' => 'nullable|url|max:255',

        'twitter' => 'nullable|url|max:255',
        'facebook' => 'nullable|url|max:255',

        'adresse' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:255',

        'cv' => 'nullable|file|mimes:pdf',
        'logo' => 'nullable|file|mimes:png',

    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function resetInput()
    {

        $this->cv = null;
    }

    public function update()
    {


        $this->validate();



        DB::beginTransaction();

        try {

            $aboutUs = AboutUs::first();



            if ($aboutUs) {

                $aboutUs->title = $this->title;

                $aboutUs->first_name = $this->first_name;
                $aboutUs->last_name = $this->last_name;
                $aboutUs->email = $this->email;
                $aboutUs->phone = $this->phone;

                $aboutUs->github = $this->github;
                $aboutUs->linkedin = $this->linkedin;

                $aboutUs->twitter = $this->twitter;
                $aboutUs->facebook = $this->facebook;

                $aboutUs->adresse = $this->adresse;
                $aboutUs->description = $this->description;

                if ($this->cv) {

                    if ($this->cv->storeAs('cv/', $this->cv->getClientOriginalName())) {

                        $aboutUs->cv = $this->cv->getClientOriginalName();

                    } else {

                        DB::rollBack();

                        $this->alert('warning', Config::get('custom.AlertMessage.error-update'));

                        return;
                    }

                }

                if ($this->logo) {

                    if ($this->logo->storeAs('public/', 'logo-app.png')) {

                        $aboutUs->logo = 'logo-app.png';

                    } else {

                        DB::rollBack();

                        $this->alert('warning', Config::get('custom.AlertMessage.error-update'));

                        return;
                    }

                }

                $aboutUs->update();

            } else {

                $aboutUs = new AboutUs();

                $aboutUs->title = $this->title;
                $aboutUs->first_name = $this->first_name;
                $aboutUs->last_name = $this->last_name;
                $aboutUs->email = $this->email;
                $aboutUs->phone = $this->phone;
                $aboutUs->github = $this->github;
                $aboutUs->linkedin = $this->linkedin;
                $aboutUs->twitter = $this->twitter;
                $aboutUs->facebook = $this->facebook;
                $aboutUs->adresse = $this->adresse;
                $aboutUs->description = $this->description;

                if ($this->cv) {

                    if ($this->cv->storeAs('cv/', $this->cv->getClientOriginalName())) {

                        $aboutUs->cv = $this->cv->getClientOriginalName();

                    } else {

                        DB::rollBack();

                        $this->alert('warning',Config::get('custom.AlertMessage.error-update'));

                        return;
                    }

                }

                if ($this->logo) {

                    if ($this->logo->storeAs('storage/logo-app.png')) {

                        $aboutUs->logo = 'logo-app.png';

                    } else {

                        DB::rollBack();

                        $this->alert('warning',Config::get('custom.AlertMessage.error-update'));

                        return;
                    }

                }

            }

            $aboutUs->save();

            DB::commit();

            $this->alert('success', Config::get('custom.AlertMessage.success-update'));

            $this->resetInput();

        } catch (\Throwable$th) {

            DB::rollBack();

            $this->alert('warning', Config::get('custom.AlertMessage.error-update'));

        }

    }

    public function mount()
    {
        $aboutUs = AboutUs::first();

        if ($aboutUs) {

            $this->title = $aboutUs->title;
            $this->first_name = $aboutUs->first_name;
            $this->last_name = $aboutUs->last_name;
            $this->email = $aboutUs->email;
            $this->phone = $aboutUs->phone;

            $this->github = $aboutUs->github;
            $this->linkedin = $aboutUs->linkedin;

            $this->twitter = $aboutUs->twitter;
            $this->facebook = $aboutUs->facebook;

            $this->adresse = $aboutUs->adresse;
            $this->description = $aboutUs->description;

        }
    }

    public function render()
    {
        return view('livewire.abouts-us.about-us-component');
    }
}
